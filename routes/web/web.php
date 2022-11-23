<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CaptchaServiceController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::get('/userlist', [UserController::class, 'userlist']);
Route::get('fectchuser', [UserController::class, 'fectchuser']);
Route::get('/userlist_demo', [UserController::class, 'userlist_demo']);

// Route::get('userprofile', [UserController::class, 'userprofile']);

Route::get('/temp/users', [UserController::class, 'indexTemp'])->name('users.temp.index');
Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/user/approval/{id}', [UserController::class, 'userApproval'])->name('user.approval');
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
Route::get('/user/first/reset', [UserController::class, 'firstReset'])->name('first.reset');
Route::post('/user/first/update', [UserController::class, 'firstResetUpdate'])->name('first.reset.update');
Route::get('/user/logout', [LoginController::class, 'logout'])->name('user.logout');

Route::get('/user-profile/{temp}/{id}', [UserController::class, 'userProfile'])->name('user.profile');

Route::get('/pengasahan-pengguna-baharu', function () {
    return view('new_user_validation');
})->name('new_user_validation');

// Route::get('/pengasahan-pengguna-baharu', function () {
//     return view('new_user_validation_demo');
// })->name('new_user_validation_demo');


Route::get('/login_demo', function () {
    return view('auth/login_demo');
})->name('login_demo');

//Route::get('/user_profile', [UserController::class, 'view_user']);

Route::get('/daftar-pengguna-baharu', function () {
    return view('add_new_user');
})->name('add_new_user');
 

