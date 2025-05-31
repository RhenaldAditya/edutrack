<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
{
    public function index()
    {
        $student_id = 3; // Siswa yang akan dibandingkan

        // --- 1. Data Nilai Individual Siswa ID 3 per Mata Pelajaran (Hanya yang Ada Skornya) ---
        // Kita mulai dari Subject yang memiliki skor untuk siswa ID 3
        $studentScoresAndSubjects = Subject::whereHas('scores', function ($query) use ($student_id) {
                $query->where('student_id', $student_id)
                      ->where(function($q) { // Hanya ambil yang punya setidaknya satu nilai
                          $q->whereNotNull('nilai_tugas')
                            ->orWhereNotNull('nilai_ujian')
                            ->orWhereNotNull('nilai_partisipasi');
                      });
            })
            ->with(['scores' => function ($query) use ($student_id) {
                $query->where('student_id', $student_id)
                      ->where(function($q) { // Filter skor yang dibawa juga
                          $q->whereNotNull('nilai_tugas')
                            ->orWhereNotNull('nilai_ujian')
                            ->orWhereNotNull('nilai_partisipasi');
                      });
            }])
            ->get();

        // Mengolah data siswa untuk perbandingan
        $studentIndividualAverages = [];
        foreach ($studentScoresAndSubjects as $subject) {
            // Asumsi: setiap siswa hanya punya SATU skor per mata pelajaran yang relevan
            $score = $subject->scores->first(); // Ambil skor pertama yang cocok (karena filter di whereHas)

            if ($score) { // Pastikan ada skor yang ditemukan
                $sumScores = ($score->nilai_tugas ?? 0) + ($score->nilai_ujian ?? 0) + ($score->nilai_partisipasi ?? 0);
                $countValidScores = 0;
                if ($score->nilai_tugas !== null) $countValidScores++;
                if ($score->nilai_ujian !== null) $countValidScores++;
                if ($score->nilai_partisipasi !== null) $countValidScores++;
                $combinedAverage = ($countValidScores > 0) ? $sumScores / $countValidScores : 0;

                $studentIndividualAverages[$subject->id] = [
                    'nama_mata_pelajaran' => $subject->nama_mata_pelajaran,
                    'nilai_tugas' => $score->nilai_tugas ?? '-',
                    'nilai_ujian' => $score->nilai_ujian ?? '-',
                    'nilai_partisipasi' => $score->nilai_partisipasi ?? '-',
                    'rata_rata_gabungan' => $combinedAverage,
                ];
            }
        }


        // --- 2. Data Rata-rata Nilai per Jenis untuk Keseluruhan Siswa ---
        // Query ini tetap menghitung rata-rata keseluruhan dari SEMUA skor yang ada
        // Kita akan filter nanti berdasarkan mata pelajaran yang dimiliki siswa ID 3
        $overallAveragesData = Subject::select(
                'subjects.id as subject_id',
                'subjects.nama_mata_pelajaran',
                DB::raw('AVG(scores.nilai_tugas) as rata_rata_tugas_overall'),
                DB::raw('AVG(scores.nilai_ujian) as rata_rata_ujian_overall'),
                DB::raw('AVG(scores.nilai_partisipasi) as rata_rata_partisipasi_overall'),
                DB::raw('
                    AVG(
                        (COALESCE(scores.nilai_tugas, 0) + COALESCE(scores.nilai_ujian, 0) + COALESCE(scores.nilai_partisipasi, 0)) /
                        NULLIF(
                            (CASE WHEN scores.nilai_tugas IS NOT NULL THEN 1 ELSE 0 END) +
                            (CASE WHEN scores.nilai_ujian IS NOT NULL THEN 1 ELSE 0 END) +
                            (CASE WHEN scores.nilai_partisipasi IS NOT NULL THEN 1 ELSE 0 END),
                            0
                        )
                    ) as rata_rata_gabungan_overall
                ')
            )
            ->leftJoin('scores', 'subjects.id', '=', 'scores.subject_id')
            ->groupBy('subjects.id', 'subjects.nama_mata_pelajaran')
            ->orderBy('subjects.id')
            ->get()
            ->keyBy('subject_id'); // Kunci koleksi berdasarkan subject_id


        // --- Finalisasi data yang akan dikirim ke view ---
        // Kita akan iterasi berdasarkan $studentIndividualAverages (mata pelajaran yang dimiliki siswa ID 3)
        // dan gabungkan dengan rata-rata keseluruhan yang sesuai.
        $finalComparisonData = [];
        foreach ($studentIndividualAverages as $subjectId => $studentData) {
            $overallData = $overallAveragesData->get($subjectId); // Ambil rata-rata keseluruhan untuk subjek ini

            $finalComparisonData[$subjectId] = [
                'subject_id' => $subjectId,
                'nama_mata_pelajaran' => $studentData['nama_mata_pelajaran'],

                // Nilai Siswa ID 3
                'nilai_tugas_siswa' => $studentData['nilai_tugas'],
                'nilai_ujian_siswa' => $studentData['nilai_ujian'],
                'nilai_partisipasi_siswa' => $studentData['nilai_partisipasi'],
                'rata_rata_gabungan_siswa' => $studentData['rata_rata_gabungan'],

                // Rata-rata Keseluruhan
                'rata_rata_tugas_overall' => $overallData ? round($overallData->rata_rata_tugas_overall, 2) : 0,
                'rata_rata_ujian_overall' => $overallData ? round($overallData->rata_rata_ujian_overall, 2) : 0,
                'rata_rata_partisipasi_overall' => $overallData ? round($overallData->rata_rata_partisipasi_overall, 2) : 0,
                'rata_rata_gabungan_overall' => $overallData ? round($overallData->rata_rata_gabungan_overall, 2) : 0,
            ];
        }

        // Urutkan berdasarkan subject_id untuk tampilan konsisten
        ksort($finalComparisonData); // Mengurutkan array berdasarkan kunci (subject_id)


        // Kirim data yang sudah difilter ke view

       
        return view('performance', [
            'title' => 'EduTrack Performance | Academic Reporting System',
            'studentId' => $student_id,
            'comparisonData' => $finalComparisonData, // Sekarang ini adalah data utama yang difilter
        ]);
    }
}