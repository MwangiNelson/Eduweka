<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/student', function () {
    return view('student/student');
});
Route::get('/student_units', function () {
    return view('student/courses');
});
Route::get('/lecturer', function () {
    return view('lecturer/lec');
});
Route::get('/taught', function () {
    return view('lecturer/taught');
});
Route::get('/admin', function () {
    return view('admin/admin_studs');
});
Route::get('/staff', function () {
    return view('admin/admin_staff');
});
Route::get('/courses', function () {
    return view('admin/admin_courses');
});
