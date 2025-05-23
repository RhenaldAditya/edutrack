<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'EduTrack Dashboard | Academic Reporting System']);
});

Route::get('/report', function () {
    return view('report', ['title' => 'EduTrack Report Viewer | Academic Reporting System']);
});

Route::get('/performance', function () {
    return view('performance', ['title' => 'EduTrack Performance | Academic Reporting System']);
});

Route::get('/grades', function () {
    return view('grades', ['title' => 'EduTrack My Grades | Academic Reporting System']);
});

Route::get('/login', function () {
    return view('login');
});

