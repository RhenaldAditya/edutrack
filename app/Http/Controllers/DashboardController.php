<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_id = 1;
        $StudentName = Student::find($student_id);
        
        // $studentDetail = Student::with(['scores.subject'])->find($student_id);

        
        

        $Pelajaran = Subject::whereHas('scores', function ($query) use ($student_id) {
            $query->where('student_id', $student_id);
        })
        ->with(['scores' => function ($query) use ($student_id) {
            $query->where('student_id', $student_id);
        }])
        ->get();

        $averageTotalScore = Score::where('student_id', $student_id)->avg('nilai_total');
        $averageParticipation = Score::where('student_id', $student_id)->avg('nilai_partisipasi');

        $fullName = $StudentName->nama_siswa;
        
        $words = explode(' ', $fullName); 

        $initialsArray = array_map(function ($word) {
            // str_split($word) akan mengubah kata menjadi array karakter
            // [0] akan mengambil karakter pertama
            // strtoupper() untuk memastikan inisial dalam huruf kapital
            return strtoupper(str_split($word)[0]); 
        }, $words);
        // 3. Gabungkan inisial-inisial tersebut dengan '/' sebagai pemisah
        $initialsString = implode('', $initialsArray);

        if (!$Pelajaran) {
            return response()->json(['message' => 'Siswa tidak ditemukan.'], 404);
        }
        
        return view('dashboard', [
            'title' => 'EduTrack Dashboard | Academic Reporting System',
            'studentName' => $StudentName,
            'Pelajaran' => $Pelajaran,
            'avgScore' => $averageTotalScore,
            'avgParticipation' => $averageParticipation,
            'inisialSiswa' => $initialsString
        ]);
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
