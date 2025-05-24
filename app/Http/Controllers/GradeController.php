<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Score; // Make sure you import Score

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function showGrades()
    {

        $student_id = 1;
        $student = Score::find($student_id);
        
        // $Pelajaran = Subject::with('scores')->get();
        // Ambil semua mata pelajaran yang memiliki nilai untuk siswa ini
        // Eager load scores DAN filter scores hanya untuk student_id ini
        $Pelajaran = Subject::whereHas('scores', function ($query) use ($student_id) {
            $query->where('student_id', $student_id);
        })
        ->with(['scores' => function ($query) use ($student_id) {
            $query->where('student_id', $student_id);
        }])
        ->get();

        $StudentName = Student::find($student_id);

        // --- LOGIKA PENGHITUNGAN MATA PELAJARAN DI ATAS RATA-RATA 80 ---
        $countSubjectsAbove55 = 0;
        foreach ($Pelajaran as $pelajaran) {
            // Ambil nilai total untuk siswa saat ini dari mata pelajaran ini
            // Asumsi: $pelajaran->scores hanya berisi satu entri untuk siswa ini karena filter di atas
            $scoreForCurrentStudent = $pelajaran->scores->first();

            if ($scoreForCurrentStudent && $scoreForCurrentStudent->nilai_total >= 55) {
                $countSubjectsAbove55++;
            }
        }
        // --- AKHIR LOGIKA PENGHITUNGAN ---
        // dd($StudentName->alamat_siswa);
        return view('grades', [
            'title' => 'EduTrack My Grades | Academic Reporting System',
            'student' => $student,
            'student_name' => $StudentName,
            'Pelajaran' => $Pelajaran,
            'countSubjectsAbove55' => $countSubjectsAbove55
        ]);
        
    }
    
     public function index()
    {
        //
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
