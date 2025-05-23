<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Academic Report</h2>
            <p class="text-gray-600">Comprehensive overview of your academic performance</p>
        </div>

        <!-- Profile Section -->
        <div class="card mb-6">
            <h3 class="section-title">Student Profile</h3>
            <div class="flex profile-flex items-center gap-6">
                <div class="profile-image">
                    <i class="fas fa-user"></i>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 flex-grow">
                    <div>
                        <p class="text-gray-600 text-sm">Full Name</p>
                        <p class="font-semibold">Alex Johnson</p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm">Student ID</p>
                        <p class="font-semibold">ST-2024-0789</p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm">Class</p>
                        <p class="font-semibold">Grade 10-A</p>
                    </div>
                    <div>
                        <p class="text-gray-600 text-sm">Academic Year</p>
                        <p class="font-semibold">2024/2025</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Table -->
        <div class="card mb-6">
            <h3 class="section-title">Academic Performance</h3>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Assignment Type</th>
                            <th class="text-right">Score</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-medium">Mathematics</td>
                            <td>Final Exam</td>
                            <td class="text-right">92/100</td>
                            <td class="status-excellent">Excellent</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Mathematics</td>
                            <td>Mid-Term</td>
                            <td class="text-right">88/100</td>
                            <td class="status-good">Very Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Physics</td>
                            <td>Final Exam</td>
                            <td class="text-right">85/100</td>
                            <td class="status-good">Very Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Physics</td>
                            <td>Lab Work</td>
                            <td class="text-right">90/100</td>
                            <td class="status-excellent">Excellent</td>
                        </tr>
                        <tr>
                            <td class="font-medium">English Literature</td>
                            <td>Essay</td>
                            <td class="text-right">78/100</td>
                            <td class="status-good">Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">English Literature</td>
                            <td>Final Exam</td>
                            <td class="text-right">82/100</td>
                            <td class="status-good">Very Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Chemistry</td>
                            <td>Mid-Term</td>
                            <td class="text-right">75/100</td>
                            <td class="status-average">Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Chemistry</td>
                            <td>Lab Work</td>
                            <td class="text-right">83/100</td>
                            <td class="status-good">Very Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">History</td>
                            <td>Research Paper</td>
                            <td class="text-right">88/100</td>
                            <td class="status-good">Very Good</td>
                        </tr>
                        <tr>
                            <td class="font-medium">Computer Science</td>
                            <td>Project</td>
                            <td class="text-right">95/100</td>
                            <td class="status-excellent">Excellent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary Section -->
        <div class="card mb-6">
            <h3 class="section-title">Performance Summary</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 text-sm mb-1">Overall GPA</p>
                    <p class="text-3xl font-bold text-gray-800">3.82</p>
                    <p class="text-sm text-gray-500 mt-1">Scale: 4.0</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 text-sm mb-1">Attendance</p>
                    <p class="text-3xl font-bold text-gray-800">95%</p>
                    <p class="text-sm text-gray-500 mt-1">Total Days: 180</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 text-sm mb-1">Class Rank</p>
                    <p class="text-3xl font-bold text-gray-800">3<span class="text-lg">rd</span></p>
                    <p class="text-sm text-gray-500 mt-1">Out of 35 students</p>
                </div>
            </div>
        </div>

        <!-- Teacher's Comment -->
        <div class="card mb-6">
            <h3 class="section-title">Advisor's Comments</h3>
            <div class="p-4 bg-gray-50 rounded-lg">
                <p class="italic text-gray-700">
                    Alex has shown excellent progress this semester. His analytical skills in Mathematics and Physics are 
                    particularly impressive. I would encourage him to maintain his high standard of work in all subjects 
                    and continue his active participation in class discussions. He has great potential and should consider 
                    joining the science olympiad team next semester.
                </p>
                <div class="mt-3 flex items-center">
                    <p class="font-semibold">Mrs. Jennifer Williams</p>
                    <span class="mx-2 text-gray-400">|</span>
                    <p class="text-gray-600">Class Advisor</p>
                </div>
            </div>
        </div>

        <!-- Download Section -->
        <div class="flex justify-end">
            <a href="#" class="btn-primary flex items-center">
                <i class="fas fa-download mr-2"></i> Download PDF
            </a>
        </div>
    </div>
</x-layout>