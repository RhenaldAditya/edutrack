<?php

use App\Http\Controllers\AdmDashboardController;
use App\Http\Controllers\DashboardController;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;

use App\Models\AcademyReport;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GradeController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\PerformanceController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/report', function () {
    return view('report', ['title' => 'EduTrack Report Viewer | Academic Reporting System']);
});

// Route::get('/performance', function () {
//     return view('performance', ['title' => 'EduTrack Performance | Academic Reporting System']);
// });

Route::get('/performance', [PerformanceController::class, 'index']);


Route::get('/grades', [GradeController::class, 'showGrades']);

// Route::get('/grades', function () {
//     return view('grades', [
//         'title' => 'EduTrack My Grades | Academic Reporting System',
//         'Pelajaran' => [
//             [
//                 'id_mata_pelajaran' => '1',
//                 'nama_mata_pelajaran' => 'Matematika',
//                 'deskripsi_pelajaran' => 'Ini pelajaran perhitungan'
//             ],
//             [
//                 'id_mata_pelajaran' => '2',
//                 'nama_mata_pelajaran' => 'Ilmu Pengetahuan Alam',
//                 'deskripsi_pelajaran' => 'Ini pelajaran alamiah'
//             ]
//         ]
//     ]);
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/admindashboard', [AdmDashboardController::class, 'index']);

Route::get('/admindashboard/admsubjects', [AdmDashboardController::class, 'admsubjects']);

Route::get('/admindashboard/admgrading', [AdmDashboardController::class, 'admgrading']);

Route::get('/admindashboard/admreports', [AdmDashboardController::class, 'admreports']);

Route::get('/admindashboard/admperformance', [AdmDashboardController::class, 'admperformance']);

Route::get('/admindashboard/admstudents', [AdmDashboardController::class, 'admstudents']);

Route::get('/admindashboard/admfeedback', [AdmDashboardController::class, 'admfeedback']);
