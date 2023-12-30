<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/admin', [FacultyController::class, 'admindashboard']);

Route::get('/adminpage', [FacultyController::class, 'adminpage']);

//FACULTY MASTER
Route::resource('faculties', FacultyController::class);  

Route::get('/faculties/{faculty_id}/edit', 'FacultyController@edit')->name('faculties.edit');

Route::put('/faculties/{faculty_id}', 'FacultyController@update')->name('faculties.update');

//STAFF MASTER
Route::resource('staffs', StaffController::class);  

Route::get('/staffs/{staff_id}/edit', 'StaffController@edit')->name('staffs.edit');

Route::put('/staffs/{staff_id}', 'StaffController@update')->name('staffs.update');


//DEPARTMENT MASTER
Route::resource('departments', DepartmentController::class);  

Route::get('/departments/{dept_id}/edit', 'DepartmentController@edit')->name('departments.edit');

Route::put('/departments/{dept_id}', 'DepartmentController@update')->name('departments.update');


//COURSE MASTER
Route::resource('courses', CourseController::class);  

Route::get('/courses/{course_id}/edit', 'CourseController@edit')->name('courses.edit');

Route::put('/courses/{course_id}', 'CourseController@update')->name('courses.update');


//BATCH MASTER
Route::resource('batches', BatchController::class);  

Route::get('/batches/{batch_id}/edit', 'BatchController@edit')->name('batches.edit');

Route::put('/batches/{batch_id}', 'BatchController@update')->name('batches.update');



//STUDENTS MASTER
Route::resource('students', StudentController::class);  

Route::get('/students/{student_id}/edit', 'StudentController@edit')->name('students.edit');

Route::put('/students/{student_id}', 'StudentController@update')->name('students.update');





//sample 
//Route::get('/index', [FacultyController::class, 'index1']);