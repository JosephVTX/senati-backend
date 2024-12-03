<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('teachers', '\App\Http\Controllers\TeacherController');
    Route::apiResource('students', '\App\Http\Controllers\StudentController');
    Route::apiResource('courses', '\App\Http\Controllers\CourseController');
});

require __DIR__ . '/auth.php';