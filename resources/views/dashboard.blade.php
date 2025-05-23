<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <!-- Welcome Message & Summary -->
        <div class=" mx-auto">
            <div class="flex justify-between items-center py-4">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Selamat Datang, Alex!</h2>
                    <p class="text-gray-600">Here's your academic progress so far for this semester</p>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="text-sm text-gray-600">Alex Johnson</span>
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                        <span class="text-sm text-gray-700">AJ</span>
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
                        <p class="text-gray-500 text-sm">Total Subjects</p>
                        <h3 class="text-3xl font-bold text-gray-800">8</h3>
                        <p class="text-green-600 text-sm mt-1">
                            <i class="fas fa-arrow-up"></i> 2 more than last semester
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
                            <p class="text-gray-500 text-sm">Average Score</p>
                            <h3 class="text-3xl font-bold text-gray-800">86.5%</h3>
                            <p class="text-green-600 text-sm mt-1">
                                <i class="fas fa-arrow-up"></i> +4.2% improvement
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
                            <p class="text-gray-500 text-sm">Class Rank</p>
                            <h3 class="text-3xl font-bold text-gray-800">5<span class="text-lg font-medium text-gray-600">/30</span></h3>
                            <p class="text-green-600 text-sm mt-1">
                                <i class="fas fa-arrow-up"></i> Up 3 positions
                            </p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-trophy text-2xl text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Semester Report -->
                <div class="card bg-white p-6 md:col-span-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Semester Report 2024/2025</h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Attendance Rate:</span>
                            <span class="font-semibold">97%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 97%"></div>
                        </div>
                        
                        <div class="flex justify-between">
                            <span class="text-gray-600">Assignments Completed:</span>
                            <span class="font-semibold">43/45</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 95%"></div>
                        </div>
                        
                        <div class="flex justify-between">
                            <span class="text-gray-600">Current GPA:</span>
                            <span class="font-semibold">3.8/4.0</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <h4 class="font-semibold text-gray-700">Teacher's Comment:</h4>
                        <p class="text-gray-600 text-sm mt-2 italic">
                            "Alex demonstrates excellent academic progress and consistent performance. 
                            Continue focusing on group participation in class discussions."
                        </p>
                    </div>
                </div>

                <!-- Recent Performance Chart -->
                <div class="card bg-white p-6 md:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Recent Performance</h3>
                        <div class="text-sm text-gray-500">Last Updated: June 12, 2024</div>
                    </div>
                    
                    <!-- CSS-only Bar Chart (Static representation) -->
                    <div class="bar-chart">
                        <div class="bar" style="height: 75%;">
                            <div class="bar-value">75%</div>
                            <div class="bar-label">Math</div>
                        </div>
                        <div class="bar" style="height: 88%;">
                            <div class="bar-value">88%</div>
                            <div class="bar-label">Science</div>
                        </div>
                        <div class="bar" style="height: 92%;">
                            <div class="bar-value">92%</div>
                            <div class="bar-label">English</div>
                        </div>
                        <div class="bar" style="height: 80%;">
                            <div class="bar-value">80%</div>
                            <div class="bar-label">History</div>
                        </div>
                        <div class="bar" style="height: 95%;">
                            <div class="bar-value">95%</div>
                            <div class="bar-label">Art</div>
                        </div>
                        <div class="bar" style="height: 78%;">
                            <div class="bar-value">78%</div>
                            <div class="bar-label">PE</div>
                        </div>
                        <div class="bar" style="height: 85%;">
                            <div class="bar-value">85%</div>
                            <div class="bar-label">CS</div>
                        </div>
                        <div class="bar" style="height: 90%;">
                            <div class="bar-value">90%</div>
                            <div class="bar-label">Music</div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center text-sm text-gray-600">
                        Subject Performance (Current Semester)
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
            


