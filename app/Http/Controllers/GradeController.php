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

        $student_id = 3;
        $usernameStudent = "rizky.putra";
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


        $averageTotalScore = Score::where('student_id', $student_id)->avg('nilai_total');

        $countPassSubject = Score::where('student_id', $student_id)->where('nilai_total', '>=', 55)->count();
        $countFailedSubject = Score::where('student_id', $student_id)->where('nilai_total', '<=', 55)->count();

        return view('grades', [
            'title' => 'EduTrack My Grades | Academic Reporting System',
            'student' => $student,
            'studentName' => $StudentName->nama_siswa,
            'Pelajaran' => $Pelajaran,
            'avgTotalScore' => round($averageTotalScore,2),
            'countPassSubject' => $countPassSubject,
            'countFailedSubject' => $countFailedSubject,
            'initialsString' => $initialsString
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
