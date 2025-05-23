<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">My Grades</h2>
            <p class="text-gray-600">Academic Year 2024/2025 - Spring Semester</p>
        </div>

        <div>
            @foreach ($Pelajaran as $pelajaran)
             <li>
                <strong>{{ $pelajaran['nama_mata_pelajaran'] }}</strong><br>
                ID: {{ $pelajaran['id_mata_pelajaran'] }}<br>
                Deskripsi: {{ $pelajaran['deskripsi_pelajaran'] }}
            </li>
            @endforeach

             @foreach ($Nilai as $nilai)
             <li>
                <strong>{{ $nilai['nilai_tugas'] }}</strong><br>
                <strong>{{ $nilai['nilai_ujian'] }}</strong><br>
            </li>
            @endforeach
        </div>

        <!-- Grades Table -->
        <div class="bg-white rounded-lg shadow-sm p-4 mb-6 overflow-hidden">
            <table class="grades-table">
                <thead>
                    <tr>
                        <th style="width: 25%">Subject</th>
                        <th style="width: 30%">Assignment/Test</th>
                        <th style="width: 15%" class="numeric">Score</th>
                        <th style="width: 15%" class="numeric">Weight</th>
                        <th style="width: 15%" class="numeric">Final Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Mathematics -->
                    <tr>
                        <td rowspan="4">Mathematics</td>
                        <td>Midterm Exam</td>
                        <td class="numeric">88/100</td>
                        <td class="numeric">30%</td>
                        <td rowspan="4" class="numeric pass">A (92.4)</td>
                    </tr>
                    <tr>
                        <td>Final Exam</td>
                        <td class="numeric">94/100</td>
                        <td class="numeric">40%</td>
                    </tr>
                    <tr>
                        <td>Homework Assignments</td>
                        <td class="numeric">96/100</td>
                        <td class="numeric">20%</td>
                    </tr>
                    <tr>
                        <td>Class Participation</td>
                        <td class="numeric">90/100</td>
                        <td class="numeric">10%</td>
                    </tr>

                    <!-- Science -->
                    <tr>
                        <td rowspan="4">Science</td>
                        <td>Midterm Exam</td>
                        <td class="numeric">82/100</td>
                        <td class="numeric">25%</td>
                        <td rowspan="4" class="numeric pass">B+ (86.8)</td>
                    </tr>
                    <tr>
                        <td>Final Exam</td>
                        <td class="numeric">88/100</td>
                        <td class="numeric">35%</td>
                    </tr>
                    <tr>
                        <td>Lab Reports</td>
                        <td class="numeric">91/100</td>
                        <td class="numeric">30%</td>
                    </tr>
                    <tr>
                        <td>Class Participation</td>
                        <td class="numeric">85/100</td>
                        <td class="numeric">10%</td>
                    </tr>

                    <!-- English -->
                    <tr>
                        <td rowspan="4">English Literature</td>
                        <td>Essay 1</td>
                        <td class="numeric">78/100</td>
                        <td class="numeric">20%</td>
                        <td rowspan="4" class="numeric pass">B (83.9)</td>
                    </tr>
                    <tr>
                        <td>Essay 2</td>
                        <td class="numeric">85/100</td>
                        <td class="numeric">20%</td>
                    </tr>
                    <tr>
                        <td>Final Paper</td>
                        <td class="numeric">87/100</td>
                        <td class="numeric">40%</td>
                    </tr>
                    <tr>
                        <td>Class Discussions</td>
                        <td class="numeric">82/100</td>
                        <td class="numeric">20%</td>
                    </tr>

                    <!-- History -->
                    <tr>
                        <td rowspan="4">History</td>
                        <td>Research Project</td>
                        <td class="numeric">91/100</td>
                        <td class="numeric">30%</td>
                        <td rowspan="4" class="numeric pass">A- (90.1)</td>
                    </tr>
                    <tr>
                        <td>Midterm Exam</td>
                        <td class="numeric">87/100</td>
                        <td class="numeric">25%</td>
                    </tr>
                    <tr>
                        <td>Final Exam</td>
                        <td class="numeric">92/100</td>
                        <td class="numeric">35%</td>
                    </tr>
                    <tr>
                        <td>Attendance</td>
                        <td class="numeric">90/100</td>
                        <td class="numeric">10%</td>
                    </tr>

                    <!-- Computer Science -->
                    <tr>
                        <td rowspan="4">Computer Science</td>
                        <td>Programming Assignments</td>
                        <td class="numeric">95/100</td>
                        <td class="numeric">40%</td>
                        <td rowspan="4" class="numeric pass">A (94.5)</td>
                    </tr>
                    <tr>
                        <td>Midterm Exam</td>
                        <td class="numeric">92/100</td>
                        <td class="numeric">20%</td>
                    </tr>
                    <tr>
                        <td>Final Project</td>
                        <td class="numeric">96/100</td>
                        <td class="numeric">30%</td>
                    </tr>
                    <tr>
                        <td>Quizzes</td>
                        <td class="numeric">94/100</td>
                        <td class="numeric">10%</td>
                    </tr>

                    <!-- Physical Education -->
                    <tr>
                        <td rowspan="3">Physical Education</td>
                        <td>Fitness Test</td>
                        <td class="numeric">88/100</td>
                        <td class="numeric">30%</td>
                        <td rowspan="3" class="numeric pass">B+ (87.5)</td>
                    </tr>
                    <tr>
                        <td>Team Sports Participation</td>
                        <td class="numeric">90/100</td>
                        <td class="numeric">40%</td>
                    </tr>
                    <tr>
                        <td>Written Exam</td>
                        <td class="numeric">84/100</td>
                        <td class="numeric">30%</td>
                    </tr>
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
                        <span class="text-3xl font-bold text-gray-800">3.87</span>
                        <span class="ml-2 text-gray-600">/4.0</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Top 15% of class</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="text-gray-600 mb-2">Subjects Performance</h4>
                    <div class="flex items-center">
                        <span class="text-3xl font-bold text-green-600">6</span>
                        <span class="ml-2 text-gray-600">Passed</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">0 Failed, 0 Incomplete</p>
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
                    Alex demonstrates excellent academic progress this semester, with particular strengths in Mathematics and Computer Science. 
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