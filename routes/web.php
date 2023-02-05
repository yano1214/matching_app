<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\MatchingController;
use App\Http\Controllers\ChatController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\PasswordResetLinkController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
//     Route::get('show/{id}', 'UserController@show')->name('users.show');
// });

    Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/show/{id}', [UserController::class, 'show']);

    Route::get('/edit/{id}', [UserController::class, 'edit']);

    Route::get('/update/{id}', [UserController::class, 'update']);
Route::post('/update/{id}', [UserController::class, 'update']);
});

Route::get('/', function () {
    return view('top');
});

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest:admin')
                ->name('password.email');

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/matching', [MatchingController::class,'index'])->name('matching');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function () {
    Route::post('show', [ChatController::class,'show'])->name('chat.show');
    Route::post('chat', [ChatController::class,'chat'])->name('chat.chat');
});

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',function () { return redirect('/admin/login_home'); });
//     Route::get('/admin_login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
//     Route::post('/admin_login',[AdminLoginController::class,'login']);
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
//     Route::post('/admin_logout',[AdminLoginController::class,'logout'])->name('admin.logout');
//     Route::get('/admin_home',[AdminHomeController::class,'index'])->name('admin.home');
// });
Route::view('/admin/login', 'admin/login');
Route::post('/admin/login', [App\Http\Controllers\admin\LoginController::class, 'login']);
Route::post('admin/logout', [App\Http\Controllers\admin\LoginController::class,'logout']);
Route::view('/admin/register', 'admin/register');
Route::post('/admin/register', [App\Http\Controllers\admin\RegisterController::class, 'register']);
Route::view('/admin/home', 'admin/home')->middleware('auth:admin');
Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class,'index']);



// Route::post('delete/{id}', [App\Http\Controllers\admin\HomeController::class, 'delete'])->name('delete');

Route::post('delete/{id}', [App\Http\Controllers\admin\HomeController::class, 'delete'])->name('delete');

// Route::get('/', function () {

//     return view('admin/home');
// });

    // Route::redirect('/delete{id}', 'admin/home');
    // Route::get('admin/home', [App\Http\Controllers\admin\HomeController::class, 'delete'])->name('delete');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Route::get('edit/{id}', 'EditController@index')->name('edit');
    // Route::post('edit/{id}', 'EditController@update');
