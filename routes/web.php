<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/postRegister', [AuthController::class, 'postRegister']);
Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/postLogin', [AuthController::class, 'postLogin']);
// see stories -> harus di ubah routenya 
Route::get('/dashboard', [StoryController::class, 'getDashboard']);
Route::get('/selengkapnya/{id}', [StoryController::class, 'getSelengkapnya']);
// Route::get('/dashboard', function () {
//     $data = DB::table('pengguna')->where('id', Session::get('id'))->get();
//     $data = json_decode($data, true);
//     $avatar = $data[0]['avatar'];

//     $data = [
//         'id' => Session::get('id'),
//         'avatar' => $avatar
//     ];

//     return view('dashboard', $data);
// });
Route::get('/createStory', [StoryController::class, 'getStory']);
Route::post('/postCreateStory', [StoryController::class, 'postStory']);

Route::get('/profile', [StoryController::class, 'getProfile']);
Route::get('/avatar', function () {
    $data = DB::table('pengguna')->where('id', Session::get('id'))->get();
    $data = json_decode($data, true);
    $avatar = $data[0]['avatar'];

    $data = [
        'id' => Session::get('id'),
        'avatar' => $avatar
    ];

    return view('avatar', $data);
});

Route::post('/changeAvatar', [AuthController::class, 'changeAvatar']);
Route::get('/logout', [AuthController::class, 'logout']);
