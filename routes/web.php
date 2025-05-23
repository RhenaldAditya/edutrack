<?php

use App\Models\NilaiSiswa;
use App\Models\Subjects;
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
    return view('grades', ['title' => 'EduTrack My Grades | Academic Reporting System', 'Pelajaran' => Subjects::all(), 'Nilai' => NilaiSiswa::all()]);
});

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

