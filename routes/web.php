<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});


Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('prosesLogin', [UserController::class, 'prosesLogin'])->name('prosesLogin');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('prosesRegister', [UserController::class, 'prosesRegister'])->name('prosesRegister');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('profile', [UserController::class, 'profile'])->name('profile');




Route::group(['middleware' => 'user'], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard.user');
    Route::get('/user/home', [UserController::class, 'dashboard'])->name('userhome');
    Route::post('/uploadsubmit', [FormController::class, 'uploadDocument'])->name('uploadsubmit');

    

});

Route::group(['middleware' => 'admin'], function () {

    Route::get('dashboard/admin', [UserController::class, 'dashboard'])->name('dashboard.admin');

    Route::post('delete/{user}', [UserController::class, 'deleteAccount'])->name('delete');
    Route::put('updateProfile/{user}', [UserController::class, 'updateProfile'])->name('updateProfile');

});

Route::get('/form', [FormController::class, 'showForm'])->name('formshow');
Route::post('/form', [FormController::class, 'submitForm'])->name('formsubmit');
Route::post('/upload-submit', [FormController::class, 'uploadDocument'])->name('uploadsubmit');


Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/kartupeserta/{user}', [AdminController::class, 'uploadKartuPeserta'])->name('admin.upload.kartupeserta');
Route::get('/download/kartupeserta', [UserController::class, 'downloadKartuPeserta'])->name('user.download.kartupeserta');

Route::get('login/google', 'UserController@redirectToGoogle');
Route::get('login/google/callback', 'UserController@handleGoogleCallback');
// routes/web.php

Route::get('/contact', function () {
    return view('contact');
});
