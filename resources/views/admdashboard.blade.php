<x-admlayout>
    <header class="header">
                <h1>Academic Management System</h1>
                <div class="user-info">
                    <div class="user-avatar">{{ $initialsStringNamaGuru }}</div>
                    <div>
                        <strong>{{ $TeacherData->nama_pengajar }}</strong>
                        <div style="color:var(--text-muted);font-size:0.97rem;">{{ $TeacherData->subject->nama_mata_pelajaran }}</div>
                    </div>
                </div>
            </header>
            <!-- Dashboard Section -->
            <section id="dashboard">
                <h2>Dashboard</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Total Students</h3>
                        <div class="value">124</div>
                        <p>Across all your classes</p>
                    </div>
                    <div class="stat-card success">
                        <h3>Average Score</h3>
                        <div class="value">78.5%</div>
                        <p>Class average performance</p>
                    </div>
                    <div class="stat-card warning">
                        <h3>Pending Grades</h3>
                        <div class="value">23</div>
                        <p>Students need grading</p>
                    </div>
                    <div class="stat-card danger">
                        <h3>Low Performers</h3>
                        <div class="value">12</div>
                        <p>Students need attention</p>
                    </div>
                </div>
                <div class="alert alert-info">
                    Welcome to EduTrack! Here you can manage your subjects, track student performance, and generate academic reports.
                </div>
                <h3 style="margin-bottom:12px;">Recent Activities</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Activity</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Updated Midterm Grades</td>
                                <td>Oct 12, 2023</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>Added New Subject: Advanced Physics</td>
                                <td>Oct 10, 2023</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>Generated Performance Reports</td>
                                <td>Oct 5, 2023</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>Feedback Submission for Class 10A</td>
                                <td>Oct 2, 2023</td>
                                <td>Pending</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
</x-admlayout>