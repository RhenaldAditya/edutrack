<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <!-- Page Header -->
        <div class="page-header px-4">
            <h1 class="page-title">Academic Performance Overview</h1>
        </div>
        
        <!-- Bar Chart Section -->
        <div class="content-card">
            <h2 class="section-title">Subject Performance</h2>
            <div class="chart-container">
                <div class="chart-axis" style="bottom: 75%;">
                    <span class="axis-label">75%</span>
                </div>
                <div class="chart-axis" style="bottom: 50%;">
                    <span class="axis-label">50%</span>
                </div>
                <div class="chart-axis" style="bottom: 25%;">
                    <span class="axis-label">25%</span>
                </div>

                <div class="bar-container">
                    <div class="bar" style="height: 80%;">
                        <span class="bar-value">80%</span>
                    </div>
                    <div class="bar-label">Mathematics</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 92%;">
                        <span class="bar-value">92%</span>
                    </div>
                    <div class="bar-label">English</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 75%;">
                        <span class="bar-value">75%</span>
                    </div>
                    <div class="bar-label">Science</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 88%;">
                        <span class="bar-value">88%</span>
                    </div>
                    <div class="bar-label">History</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 65%;">
                        <span class="bar-value">65%</span>
                    </div>
                    <div class="bar-label">Art</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 78%;">
                        <span class="bar-value">78%</span>
                    </div>
                    <div class="bar-label">Geography</div>
                </div>
                
                <div class="bar-container">
                    <div class="bar" style="height: 85%;">
                        <span class="bar-value">85%</span>
                    </div>
                    <div class="bar-label">Physics</div>
                </div>
            </div>
        </div>
        
        <!-- Comparison Table Section -->
        {{-- Perbandingan Data Nilai Ujian --}}
        <div class="content-card">
            <h2 class="section-title">Perbandingan Nilai Ujian</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="text-align:center">Mata Pelajaran</th>
                        <th style="text-align:center">Nilai Ujian</th>
                        <th style="text-align:center">Rata-Rata Kelas</th>
                        <th style="text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($comparisonData))
                        <tr>
                            <td colspan="4" style="text-align: center">Tidak ada data nilai yang ditemukan untuk siswa ini.</td>
                        </tr>
                    @else
                    @foreach ($comparisonData as $item)
                    @php
                        $studentTaskScore = number_format($item['nilai_tugas_siswa'], 2);
                        $overallTaskAvg = number_format($item['rata_rata_tugas_overall'], 2);
                    @endphp
                            <tr>
                                <td style="width:33%">{{ $item['nama_mata_pelajaran'] }}</td>
                                <td style="text-align:center">{{ $studentTaskScore }}</td>
                                <td style="text-align:center">{{ $overallTaskAvg  }}</td>
                                <td style="text-align:center">
                                    @if ($studentTaskScore > $overallTaskAvg)
                                        <span class="status-tag status-above">Above Average</span>
                                    @elseif ($studentTaskScore < $overallTaskAvg)
                                        <span class="status-tag status-below">Below Average</span>
                                    @else
                                        <span class="status-tag status-average">Average</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        {{-- Perbandingan Data Nilai Tugas --}}
        <div class="content-card">
            <h2 class="section-title">Perbandingan Nilai Tugas</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="text-align:center">Mata Pelajaran</th>
                        <th style="text-align:center">Nilai Tugas</th>
                        <th style="text-align:center">Rata-Rata Kelas</th>
                        <th style="text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($comparisonData))
                        <tr>
                            <td colspan="4">Tidak ada data nilai yang ditemukan untuk siswa ini.</td>
                        </tr>
                    @else
                    @foreach ($comparisonData as $item)
                    @php
                        $studentExamScore = number_format($item['nilai_ujian_siswa'], 2);
                        $overallExamAvg = number_format($item['rata_rata_ujian_overall'], 2);
                    @endphp
                            <tr>
                                <td style="width:33%">{{ $item['nama_mata_pelajaran'] }}</td>
                                <td style="text-align:center">{{ $studentExamScore  }}</td>
                                <td style="text-align:center">{{ $overallExamAvg   }}</td>
                                <td style="text-align:center">
                                    @if ($studentExamScore > $overallExamAvg)
                                        <span class="status-tag status-above">Above Average</span>
                                    @elseif ($studentExamScore < $overallExamAvg)
                                        <span class="status-tag status-below">Below Average</span>
                                    @else
                                        <span class="status-tag status-average">Average</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        {{-- Perbandingan Data Nilai Tugas --}}
        <div class="content-card">
            <h2 class="section-title">Perbandingan Nilai Partisipasi</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="text-align:center">Mata Pelajaran</th>
                        <th style="text-align:center">Nilai Partisipasi</th>
                        <th style="text-align:center">Rata-Rata Kelas</th>
                        <th style="text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($comparisonData))
                        <tr>
                            <td colspan="4">Tidak ada data nilai yang ditemukan untuk siswa ini.</td>
                        </tr>
                    @else
                    @foreach ($comparisonData as $item)
                    @php
                        $studentParticipationScore  = number_format($item['nilai_partisipasi_siswa'], 2);
                        $overallParticipationAvg  = number_format($item['rata_rata_partisipasi_overall'], 2);
                    @endphp
                            <tr>
                                <td style="width:33%">{{ $item['nama_mata_pelajaran'] }}</td>
                                <td style="text-align:center">{{ $studentParticipationScore  }}</td>
                                <td style="text-align:center">{{ $overallParticipationAvg   }}</td>
                                <td style="text-align:center">
                                    @if ($studentParticipationScore > $overallParticipationAvg)
                                        <span class="status-tag status-above">Above Average</span>
                                    @elseif ($studentParticipationScore < $overallParticipationAvg)
                                        <span class="status-tag status-below">Below Average</span>
                                    @else
                                        <span class="status-tag status-average">Average</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <div class="content-card">
            <h2 class="section-title">Subject Comparison All Factors</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="text-align:center">Mata Pelajaran</th>
                        <th style="text-align:center">Rata-Rata<br>Nilai Keseluruhan</th>
                        <th style="text-align:center">Rata-Rata Kelas</th>
                        <th style="text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($comparisonData))
                        <tr>
                            <td colspan="4">Tidak ada data nilai yang ditemukan untuk siswa ini.</td>
                        </tr>
                    @else
                    @foreach ($comparisonData as $item)
                        @php
                            $studentCombinedAvg = number_format($item['rata_rata_gabungan_siswa'], 2);
                            $overallCombinedAvg = number_format($item['rata_rata_gabungan_overall'], 2);
                        @endphp
                            <tr>
                                <td style="width:33%">{{ $item['nama_mata_pelajaran'] }}</td>
                                <td style="text-align:center">{{ $studentCombinedAvg }}</td>
                                <td style="text-align:center">{{ $overallCombinedAvg }}</td>
                                <td style="text-align:center">
                                    @if ($studentCombinedAvg > $overallCombinedAvg)
                                        <span class="status-tag status-above">Above Average</span>
                                    @elseif ($studentCombinedAvg < $overallCombinedAvg)
                                        <span class="status-tag status-below">Below Average</span>
                                    @else
                                        <span class="status-tag status-average">Average</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        
        <!-- Progress Summary Section -->
        <div class="content-card">
            <h2 class="section-title">Progress Summary</h2>
            <div class="progress-container">
                <div class="progress-item">
                    <i class="fas fa-check-circle progress-icon"></i>
                    <div class="progress-value">95%</div>
                    <div class="progress-label">Attendance</div>
                </div>
                
                <div class="progress-item">
                    <i class="fas fa-tasks progress-icon"></i>
                    <div class="progress-value">28/30</div>
                    <div class="progress-label">Assignments Completed</div>
                </div>
                
                <div class="progress-item">
                    <i class="fas fa-trophy progress-icon"></i>
                    <div class="progress-value">5th</div>
                    <div class="progress-label">Rank in Class</div>
                </div>
                
                <div class="progress-item">
                    <i class="fas fa-chart-line progress-icon"></i>
                    <div class="progress-value">+12%</div>
                    <div class="progress-label">Improvement from Last Term</div>
                </div>
            </div>
        </div>
    </div>
</x-layout>