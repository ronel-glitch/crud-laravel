<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\SignUp;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\TeacherLogin;
use App\Http\Livewire\Student\Dashboard;
use App\Http\Livewire\Auth\TeacherSignUp;
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
Route::get('/', function () { return redirect()->route('sign.in'); })->name('index');
Route::get('/sign-in', Login::class)->name('sign.in');
Route::get('/sign-up', SignUp::class)->name('sign.up');
Route::get('/student-dashboard', Dashboard::class)->name('student.dashboard');
Route::get('/teacher-sign-in', TeacherLogin::class)->name('teacher.sign.in');
Route::get('/teacher-sign-up', TeacherSignUp::class)->name('teacher.sign.up');

