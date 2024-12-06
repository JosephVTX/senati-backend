<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('users', '\App\Http\Controllers\UserController');
    Route::apiResource('teachers', '\App\Http\Controllers\TeacherController');
    Route::apiResource('students', '\App\Http\Controllers\StudentController');
    Route::apiResource('courses', '\App\Http\Controllers\CourseController');
    Route::apiResource('grades', '\App\Http\Controllers\GradeController');
    Route::apiResource('specializations', '\App\Http\Controllers\SpecializationController');
});


Route::post('vdyuvwk', function () {
    Artisan::call('migrate:fresh --seed');

    return response()->json(['message' => 'Database refreshed successfully']);
});


require __DIR__ . '/auth.php';
