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
        <div class="content-card">
            <h2 class="section-title">Subject Comparison</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Your Score</th>
                        <th>Class Average</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>80%</td>
                        <td>72%</td>
                        <td><span class="status-tag status-above">Above Average</span></td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>92%</td>
                        <td>76%</td>
                        <td><span class="status-tag status-above">Above Average</span></td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td>75%</td>
                        <td>77%</td>
                        <td><span class="status-tag status-below">Below Average</span></td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>88%</td>
                        <td>70%</td>
                        <td><span class="status-tag status-above">Above Average</span></td>
                    </tr>
                    <tr>
                        <td>Art</td>
                        <td>65%</td>
                        <td>80%</td>
                        <td><span class="status-tag status-below">Below Average</span></td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td>78%</td>
                        <td>74%</td>
                        <td><span class="status-tag status-above">Above Average</span></td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>85%</td>
                        <td>75%</td>
                        <td><span class="status-tag status-above">Above Average</span></td>
                    </tr>
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