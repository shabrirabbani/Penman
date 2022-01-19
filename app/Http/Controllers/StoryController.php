<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StoryController extends Controller
{
    public function getDashboard()
    {
        // avatar
        $avatar = DB::table('pengguna')->where('id', Session::get('id'))->get();
        $avatar = json_decode($avatar, true);
        $avatar = $avatar[0]['avatar'];

        // cerita 
        $cerita = DB::table('cerita')->get();
        $cerita = json_decode($cerita, true);

        $data = [
            'id' => Session::get('id'),
            'avatar' => $avatar,
            'cerita' => $cerita
        ];

        return view('dashboard', $data);
    }

    public function getSelengkapnya($id)
    {
        $id = $id;
        $sql = DB::table('cerita')
            ->where('id', $id)
            ->get();
        $link = $data = DB::table('pengguna')->where('id', Session::get('id'))->get();
        $link = json_decode($link, true);
        $avatar = $link[0]['avatar'];

        $rows = json_decode($sql, true);
        $data = [
            'rows' => $rows,
            'avatar' => $avatar
        ];
        return view('selengkapnya', $data);
    }

    public function getStory()
    {
        //kirim avatar
        $link = $data = DB::table('pengguna')->where('id', Session::get('id'))->get();
        $link = json_decode($link, true);
        $avatar = $link[0]['avatar'];

        $link = [
            'id' => Session::get('id'),
            'avatar' => $avatar
        ];

        return view('/story', $link);
    }

    public function postStory()
    {
        $id_user = Session::get('id');
        $judul = Request()->get('judul_cerita');
        $isi = Request()->get('isi_cerita');

        DB::table('cerita')
            ->insert([
                'id_user' => $id_user,
                'judul_cerita' => $judul,
                'isi_cerita' => $isi
            ]);

        return redirect('/dashboard');
    }

    public function getProfile()
    {
        $sql = DB::table('cerita')->where('id_user', Session::get('id'))->get();
        //Avatar
        $link = $data = DB::table('pengguna')->where('id', Session::get('id'))->get();
        $link = json_decode($link, true);
        $avatar = $link[0]['avatar'];

        $data = [
            'id_user' => Session::get('id'),
            'username' => Session::get('username'),
            'nama' => Session::get('nama'),
            'birthdate' => Session::get('birthdate'),
            'avatar' => $avatar,
            'email' => Session::get('email'),
            'cerita' => json_decode($sql, true)
        ];

        return view('/profile', $data);
    }
}
