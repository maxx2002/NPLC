<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});

Route::get('/registrationform', function (){
    return view('daftar');
})->name('registrationform');

Route::post('/registrationsuccess', [DaftarController::class, 'add']);

Route::get('/dashboard/school', [RegisterController::class, 'school']);

Route::get('/dashboard/team', [RegisterController::class, 'team'])->name('team');
Route::get('/dashboard/team/{id_team}', [RegisterController::class, 'detail'])->name('member');
Route::get('/dashboard/team/edit/{id_team}', [RegisterController::class, 'editTeam']);
Route::post('/dashboard/team/update/{id_team}', [RegisterController::class, 'updateTeam']);
Route::get('/dashboard/team/delete/{id_team}', [RegisterController::class, 'deleteTeam']);
Route::get('/dashboard/team/verified/{id_team}', [RegisterController::class, 'verifiedTeam']);

Route::get('/dashboard/team/member/edit/{id_member}', [RegisterController::class, 'editMember']);
Route::post('/dashboard/team/member/update/{id_member}', [RegisterController::class, 'updateMember']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//email
Route::post('/email', [MailController::class, 'sendEmail']);