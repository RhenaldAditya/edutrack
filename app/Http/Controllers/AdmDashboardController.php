<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdmDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher_id = 1;
        $TeacherName = Teacher::with('subject')->find($teacher_id);
        
        $namaGuru = $TeacherName->nama_pengajar;
        $namaGuruParts = explode(',', $namaGuru);
        // 2. Ambil elemen pertama dari array (yaitu bagian sebelum koma)
        $namaGuruOnly = $namaGuruParts[0];
        $words = explode(' ', $namaGuruOnly); 
        $initialsArrayNamaGuru = array_map(function ($word) {
            // str_split($word) akan mengubah kata menjadi array karakter
            // [0] akan mengambil karakter pertama
            // strtoupper() untuk memastikan inisial dalam huruf kapital
            return strtoupper(str_split($word)[0]); 
        }, $words);
        // 3. Gabungkan inisial-inisial tersebut dengan '/' sebagai pemisah
        $initialsStringNamaGuru = implode('', $initialsArrayNamaGuru);

        //hitung jumlah keseluruhan murid
        $jumlahMurid = Student::count();

        //mean nilai total
        $rataRataNilaiTotal = Score::avg('nilai_total');

        //low or not pass subject 
        $countFailedSubject = Score::where('nilai_total', '<=', 55)->count();

        return view('admdashboard', [
            'TeacherData' => $TeacherName,
            'initialsStringNamaGuru' => $initialsStringNamaGuru,
            'jmlMurid' => $jumlahMurid,
            'meanNilaiTotal' => $rataRataNilaiTotal,
            'failPassSubject' => $countFailedSubject
        ]);
    }

    public function admsubjects()
    {
        $SubjectDetail = Subject::all();
        
        return view('admsubjects', [
            'subjectDetail' => $SubjectDetail
        ]);
    }

    public function admgrading()
    {
        return view('admgrading');
    }

    public function admreports()
    {
        return view('admreports');
    }

    public function admperformance()
    {
        return view('admperformance');
    }

    public function admstudents()
    {
        return view('admstudents');
    }

    public function admfeedback()
    {
        return view('admfeedback');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
