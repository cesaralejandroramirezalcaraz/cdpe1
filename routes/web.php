<?php

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

//-----------------------------------------------------------
Route::get('alumno', function () {
         return view('student_log');
     });
Route::get('alumno_log_int', function () {
         return view('student_home');
     });
Route::get('alumno_mensaje', function () {
        return view('student_mensajes');
    });
//------------------------------------------------------------          

Route::get('asesor', function () {
        return view('teacher_log');
    });
 
Route::get('teacher_log_int', function () {
         return view('teacher_home');
     });

 


   