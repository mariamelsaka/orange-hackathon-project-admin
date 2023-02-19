<?php

namespace App\Http\Controllers\Api;
namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\RevisionController;
use App\Http\Controllers\Api\StudentController;
use APP\Models\Category;
use App\Models\Course;
use App\Models\Revision;
use App\Models\Student;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register_admin', [AuthController::class, 'register_admin']);
    Route::post('add_course', [CourseController::class, 'add_course']);
    Route::post('view_exam', [RevisionController::class, 'view_exam']);
    Route::post('view_student', [StudentController::class, 'view_student']);
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('logout', [AuthController::class, 'logout']);
    });
});
