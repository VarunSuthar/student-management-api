<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('students', StudentController::class);
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('announcements', AnnouncementController::class);
    Route::apiResource('notes', NoteController::class);
    Route::apiResource('attendance', AttendanceController::class);
    Route::apiResource('inquiries', InquiryController::class);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});


