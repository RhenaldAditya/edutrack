<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <div class="mx-auto">
            <div class="flex justify-between items-center py-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">My Grades</h2>
                    <p class="text-gray-600">Tahun Akademik 2024/2025 - Semester Genap</p>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="text-m text-gray-900">{{ $studentName }}</span>
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                        <span class="text-sm text-gray-700">{{ $initialsString }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grades Table -->
        <div class="bg-white rounded-lg shadow-sm p-4 mb-6 overflow-hidden">
            <table border="1" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width:30%; text-align:center">Mata Pelajaran</th>
                        <th style="width:25%; text-align:center">Jenis Nilai</th>
                        <th style="width:20%; text-align:center">Nilai</th>
                        <th style="width:25%; text-align:center" >Nilai Total</th> {{-- Opsional: Tambahkan kolom keterangan --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Pelajaran as $pelajaran)
                        {{-- Karena $Pelajaran sudah difilter untuk satu siswa,
                            $pelajaran->scores seharusnya hanya memiliki satu entri untuk siswa tersebut --}}
                        @php
                            // Ambil nilai tugas, ujian, partisipasi, dan total untuk siswa saat ini
                            // Pastikan $pelajaran->scores tidak kosong sebelum mengaksesnya
                            $score = $pelajaran->scores->first(); // Ambil satu-satunya score untuk siswa ini
                        @endphp

                        @if($score) {{-- Pastikan score ditemukan untuk mata pelajaran ini --}}
                            <tr>
                                <td rowspan="3" class="font-bold" style="font-size: large; text-align:center">{{ $pelajaran->nama_mata_pelajaran }}</td>
                                <td>Nilai Tugas</td>
                                <td class="numeric">{{ $score->nilai_tugas }} / 100</td>

                                <td style="font-size: large" rowspan="3" class="numeric pass">
                                    
                                    <?php 
                                    if ($score->nilai_total >= 95) {
                                        echo "A+";
                                    } elseif ($score->nilai_total >= 90 && $score->nilai_total <= 95) {
                                        echo "A";
                                    } elseif ($score->nilai_total >= 85 && $score->nilai_total <= 90) {
                                        echo "A-";
                                    } elseif ($score->nilai_total >= 80 && $score->nilai_total <= 85) {
                                        echo "B+";
                                    } elseif ($score->nilai_total >= 75 && $score->nilai_total <= 80) {
                                        echo "B";
                                    } elseif ($score->nilai_total >= 70 && $score->nilai_total <= 75) {
                                        echo "B-";
                                    } elseif ($score->nilai_total >= 65 && $score->nilai_total <= 70) {
                                        echo "C+";
                                    } elseif ($score->nilai_total >= 60 && $score->nilai_total <= 65) {
                                        echo "C";
                                    } elseif ($score->nilai_total >= 55 && $score->nilai_total <= 60) {
                                        echo "C-";
                                    } elseif ($score->nilai_total >= 50 && $score->nilai_total <= 55) {
                                        echo "D";
                                    } 
                                    elseif ($score->nilai_total <= 50) { // Jika nilaiTotal < 50
                                        echo "E";
                                    }
                                    ?>
                                    
                                    ({{ $score->nilai_total }} / 100)</td>
                                
                            </tr>
                            <tr>
                                <td>Nilai Ujian</td>
                                <td class="numeric">{{ $score->nilai_ujian }} / 100</td>
                                
                            </tr>
                            <tr>
                                <td>Nilai Partisipasi</td>
                                <td class="numeric">{{ $score->nilai_partisipasi }} / 100</td>
                                
                            </tr>
                            {{-- <tr>
                                <td style="font-weight: bold">Nilai Total</td>
                                <td style="font-weight: bold" class="numeric">{{ $score->nilai_total }} / 100</td>
                                
                            </tr> --}}
                        @else
                            <tr>
                                <td rowspan="4">{{ $pelajaran['nama_mata_pelajaran'] }}</td>
                                <td colspan="3">Tidak ada nilai untuk siswa ini di mata pelajaran ini.</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Summary Section -->
        <div class="summary-box p-6 mb-6">
            <h3 class="text-xl font-bold mb-4">Semester Summary</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="text-gray-600 mb-2">Overall GPA</h4>
                    <div class="flex items-center">
                        <span class="text-3xl font-bold text-gray-800">
                        {{ $avgTotalScore }}
                        </span>
                        <span class="ml-2 text-gray-600"> / 100</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Top 15% of class</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="text-gray-600 mb-2">Subjects Performance</h4>
                    <div class="flex items-center">
                        <span class="text-3xl font-bold text-green-600">
                            {{ $countPassSubject }}
                            </span>
                        <span class="ml-2 text-gray-600">Passed</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">{{ $countFailedSubject }} Failed, 0 Incomplete</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="text-gray-600 mb-2">Academic Standing</h4>
                    <div class="text-3xl font-bold text-green-600">Excellent</div>
                    <p class="text-sm text-gray-500 mt-2">Dean's List Eligible</p>
                </div>
            </div>
            
            <div class="mt-6 border-t pt-4">
                <h4 class="font-semibold mb-2">Academic Advisor Remarks:</h4>
                <p class="text-gray-700">
                    {{ $studentName }} demonstrates excellent academic progress this semester, with particular strengths in Mathematics and Computer Science. 
                    Consider enrolling in Advanced Computer Science next semester to further develop these skills. 
                    Continue to maintain the current study habits and engagement levels.
                </p>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-4 mb-6">
            <button class="btn-primary">
                <i class="fas fa-print mr-2"></i> Print Grade Report
            </button>
            <button class="btn-primary">
                <i class="fas fa-envelope mr-2"></i> Request Grade Review
            </button>
        </div>
</x-layout>