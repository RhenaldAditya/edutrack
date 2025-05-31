<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <!-- Welcome Message & Summary -->
        <div class=" mx-auto">
            <div class="flex justify-between items-center py-4">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Selamat Datang, {{ $studentName->nama_siswa }}</h2>
                    <p class="text-gray-600">Berikut adalah kemajuan akademis Anda sejauh ini untuk semester ini</p>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="text-sm text-gray-600">{{ $studentName->nama_siswa }}</span>
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                        <span class="text-sm text-gray-700">{{ $inisialSiswa }}</span>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Subjects Card -->
            <div class="card bg-white p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Pelajaran</p>
                        <h3 class="text-3xl font-bold text-gray-800">{{ count($Pelajaran) }}</h3>
                        <p class="text-green-600 text-sm mt-1">
                            <i class="fas fa-arrow-up"></i> 2 pelajaran lebih banyak dari semester kemarin
                        </p>
                    </div>
                    <div class="h-14 w-14 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="fas fa-book text-2xl text-green-600"></i>
                    </div>
                </div>
            </div>

                <!-- Average Score Card -->
                <div class="card bg-white p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Rata-rata Score</p>
                            <h3 class="text-3xl font-bold text-gray-800">{{ number_format($avgScore,1) }}%</h3>
                            <p class="text-green-600 text-sm mt-1">
                                <i class="fas fa-arrow-up"></i> +4.2% Peningkatan
                            </p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-chart-line text-2xl text-blue-600"></i>
                        </div>
                    </div>
                </div>

                <!-- Rank Position Card -->
                <div class="card bg-white p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Rank Kelas</p>
                            <h3 class="text-3xl font-bold text-gray-800">5<span class="text-lg font-medium text-gray-600">/30</span></h3>
                            <p class="text-green-600 text-sm mt-1">
                                <i class="fas fa-arrow-up"></i> Naik 3 posisi
                            </p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-trophy text-2xl text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
                <!-- Semester Report -->
                <div class="card bg-white p-6 md:col-span-3">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Semester Report 2024/2025</h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tingkat Partisipasi:</span>
                            <span class="font-semibold">{{ number_format($avgParticipation,0) }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ number_format($avgParticipation,2) }}%"></div>
                        </div>
                        
                        <div class="flex justify-between">
                            <span class="text-gray-600">Assignments Completed:</span>
                            <span class="font-semibold">43/45</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 95%"></div>
                        </div>
                        
                        <div class="flex justify-between">
                            <span class="text-gray-600">Rata-rata Keseluruhan Nilai:</span>
                            <span class="font-semibold">{{ number_format($avgScore,2) }}/100</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ number_format($avgScore,2) }}%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <h4 class="font-semibold text-gray-700">Komentar Guru:</h4>
                        <p class="text-gray-600 text-sm mt-2 italic">
                            "{{ $studentName->nama_siswa }} menunjukkan kemajuan akademik yang sangat baik dan kinerja yang konsisten. 
                            Terus berfokus pada partisipasi kelompok dalam diskusi kelas."
                        </p>
                    </div>
                </div>
            </div>

                <!-- Recent Performance Chart -->
                <div class="card bg-white p-6 md:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Performa Terakhir</h3>
                        @php
                            date_default_timezone_set('Asia/Jakarta');
                        @endphp
                        <div class="text-sm text-gray-500">Last Updated: {{ date("j F Y, H:i:s") }}</div>
                    </div>
                    
                    <!-- CSS-only Bar Chart (Static representation) -->
                    
                    @php
                        $ceking = 0; // Inisialisasi counter $ceking
                    @endphp
                    @foreach ($Pelajaran as $pelajaran)
                    @if ($ceking % 5 == 0) {{-- Cek apakah $ceking adalah 0, 5, 10, dst. (awal dari grup baru) --}}
                        @if ($ceking > 0) {{-- Jika ini bukan grup pertama, tutup div "bar-chart" sebelumnya --}}
                            </div> {{-- Tutup <div class="bar-chart"> sebelumnya --}}
                            <br> {{-- Tambahkan <br> setelah grup "bar-chart" sebelumnya --}}
                        @endif
                        <div class="bar-chart"> {{-- Buka <div class="bar-chart"> baru --}}
                    @endif
                    {{-- Bagian ini adalah konten untuk setiap bar individual, seperti pada kode asli Anda --}}
                    @php
                        // Karena $Pelajaran sudah difilter untuk satu siswa,
                        // $pelajaran->scores seharusnya hanya memiliki satu entri untuk siswa tersebut
                        
                        // Ambil nilai tugas, ujian, partisipasi, dan total untuk siswa saat ini
                        // Pastikan $pelajaran->scores tidak kosong sebelum mengaksesnya
                        $score = $pelajaran->scores->first(); // Ambil satu-satunya score untuk siswa ini
                    @endphp
                    
                    <div class="bar" style="height: {{ number_format($score->nilai_total,0)}}%;">
                        <div class="bar-value">{{ number_format($score->nilai_total,0)}}%</div>
                        <div class="bar-label">{{ $pelajaran->nama_mata_pelajaran }}</div>
                    </div> <br> {{-- Ini adalah <br> di dalam "bar-chart", setelah setiap bar individual --}}
                    {{-- Akhir dari konten bar individual --}}
                            
                    @php
                        $ceking++; // Increment counter $ceking setelah setiap item diproses
                    @endphp

                    @if ($loop->last) {{-- Jika ini adalah item terakhir dalam loop --}}
                        </div> {{-- Tutup <div class="bar-chart"> yang terakhir --}}
                        <br> {{-- Tambahkan <br> setelah grup "bar-chart" yang terakhir --}}
                    @endif
                    @endforeach
                    
                    
                    <div class="mt-6 text-center text-sm text-gray-600">
                        Performa Mata Pelajaran (Semester Saat Ini)
                    </div>
                </div>
            </div>

            <!-- Recent Notifications -->
            <div class="card bg-white p-6 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-800">Recent Notifications</h3>
                    <a href="#" class="text-green-600 hover:text-green-800 text-sm font-medium">View All</a>
                </div>
                
                <div class="space-y-4">
                    <div class="notification-item notification-test p-3 bg-white rounded-lg">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center mr-3">
                                <i class="fas fa-clipboard-list text-yellow-600"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h4 class="font-medium text-gray-800">Mathematics Test</h4>
                                    <span class="text-xs text-gray-500">Tomorrow</span>
                                </div>
                                <p class="text-sm text-gray-600">Calculus Chapter 5-6 examination scheduled for 9:00 AM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="notification-item notification-grade p-3 bg-white rounded-lg">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                <i class="fas fa-chart-bar text-green-600"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h4 class="font-medium text-gray-800">New Grade Posted</h4>
                                    <span class="text-xs text-gray-500">2 hours ago</span>
                                </div>
                                <p class="text-sm text-gray-600">Science Laboratory Report: 92/100 - Excellent work!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="notification-item notification-task p-3 bg-white rounded-lg">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <i class="fas fa-tasks text-blue-600"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h4 class="font-medium text-gray-800">Assignment Due</h4>
                                    <span class="text-xs text-gray-500">3 days left</span>
                                </div>
                                <p class="text-sm text-gray-600">English Literature Essay on "The Great Gatsby" - 1000 words</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="notification-item notification-test p-3 bg-white rounded-lg">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                <i class="fas fa-user-friends text-purple-600"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <h4 class="font-medium text-gray-800">Parent-Teacher Conference</h4>
                                    <span class="text-xs text-gray-500">Next week</span>
                                </div>
                                <p class="text-sm text-gray-600">Scheduled for June 20, 2024 at 4:30 PM - Please confirm attendance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upcoming Events -->
            <div class="card bg-white p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-800">Upcoming Academic Events</h3>
                    <a href="#" class="text-green-600 hover:text-green-800 text-sm font-medium">View Calendar</a>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-center p-2 border-l-4 border-blue-500 bg-blue-50 rounded-r-lg">
                        <div class="mr-4 text-center">
                            <div class="text-xl font-bold text-blue-600">15</div>
                            <div class="text-xs text-blue-600">JUN</div>
                        </div>
                        <div>
                            <h4 class="font-medium">Science Fair Project Due</h4>
                            <p class="text-sm text-gray-600">Submit your project by 3:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-2 border-l-4 border-green-500 bg-green-50 rounded-r-lg">
                        <div class="mr-4 text-center">
                            <div class="text-xl font-bold text-green-600">20</div>
                            <div class="text-xs text-green-600">JUN</div>
                        </div>
                        <div>
                            <h4 class="font-medium">Parent-Teacher Conference</h4>
                            <p class="text-sm text-gray-600">4:30 PM - Room 205</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center p-2 border-l-4 border-yellow-500 bg-yellow-50 rounded-r-lg">
                        <div class="mr-4 text-center">
                            <div class="text-xl font-bold text-yellow-600">25</div>
                            <div class="text-xs text-yellow-600">JUN</div>
                        </div>
                        <div>
                            <h4 class="font-medium">End of Semester Exam Week</h4>
                            <p class="text-sm text-gray-600">Exam schedules will be posted soon</p>
                        </div>
                    </div>
                </div>
            </div>   
</x-layout>
            


