<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $pass1 = $request->password;
        $pass2 = $request->confirm;

        // validasi 
        if ($pass1 != $pass2) {
            return redirect('/register')->with('error', 'Password tidak sesuai');
        }

        // isi data ke tabel berdasarkan form registrasi 
        $pengguna = new Pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->username = $request->username;
        $pengguna->email = $request->email;
        $pengguna->birthdate = $request->birthdate;
        $pengguna->password =  Hash::make($request->password);
        // avatar
        $pengguna->avatar = '';
        $pengguna->save();
        return redirect('/login')->with('status', 'Anda berhasil daftar!');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $data = DB::table('pengguna')->where('username', $request->username)->get();
        $data = json_decode($data, true); //mengubah value variable data menjadi arraya assosiatif
        $sql =  DB::table('pengguna')->where('username', $request->username)->count(); //validasi username
        $pass = DB::table('pengguna')->where('username', $request->username)->pluck('password');
        if ($sql == 1) {
            if (Hash::check($request->password, $pass[0])) {
                Session::put('id', $data[0]['id']);
                Session::put('username', $data[0]['username']);
                Session::put('nama', $data[0]['nama']);
                Session::put('email', $data[0]['email']);
                Session::put('birthdate', $data[0]['birthdate']);
                Session::put('avatar', $data[0]['avatar']);
                // nanti diubah jadi dashboard

                $link = DB::table('pengguna')->where('id', $data[0]['id'])->get();
                $link = json_decode($link, true);
                $avatar = $link[0]['avatar'];

                $cerita = DB::table('cerita')->get();
                $cerita = json_decode($cerita, true);

                $link = [
                    'id' => Session::get('id'),
                    'avatar' => $avatar,
                    'cerita' => $cerita
                ];

                if ($link['avatar'] == '') {
                    return view('/avatar', $link);
                } else {
                    return view('/dashboard', $link);
                }
            } else {
                echo "<script>
                alert('password salah');
                </script>";
            }
        }
    }

    public function changeAvatar(Request $request)
    {
        $id = Session::get('id');
        $num = $request->icon;

        switch ($num) {
            case '0':
                $img = "../assets/foto/User0.png";
                break;
            case '1':
                $img = "../assets/foto/User1.png";
                break;
            case '2':
                $img = "../assets/foto/User2.png";
                break;
            case '3':
                $img = "../assets/foto/User3.png";
                break;
            default:
                $img = "../assets/foto/User0.png";
                break;
        }

        $sql = DB::table('pengguna')
            ->where('id', $id)
            ->update(array('avatar' => $img));

        if ($sql) {
            return redirect('/dashboard');
        } else {
            echo "<script>
            alert('ada masalah');
            </script>";

            return redirect('/avatar');
        }
    }

    public function logout(Request $request)
    {
        // Session::flush();
        session()->forget('id');
        session()->forget('nama');
        session()->forget('username');
        session()->forget('email');
        session()->forget('birthdate');
        session()->forget('avatar');

        // dd(session()->get('nama'));
        return redirect('/index');
    }
}
