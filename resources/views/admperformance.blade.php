<!-- Class Performance Analysis Section -->
<x-admlayout>
     <section id="performance">
                <h2>Class Performance Analysis</h2>
                <div class="form-group">
                    <label for="select-performance-class">Select Class</label>
                    <select id="select-performance-class">
                        <option value="class-10a">Class 10A - Mathematics</option>
                        <option value="class-11b">Class 11B - Physics</option>
                        <option value="class-9c">Class 9C - Chemistry</option>
                    </select>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Class Average</h3>
                        <div class="value">78.5%</div>
                        <p>Overall class performance</p>
                    </div>
                    <div class="stat-card success">
                        <h3>Highest Score</h3>
                        <div class="value">93%</div>
                        <p>Emma Johnson</p>
                    </div>
                    <div class="stat-card danger">
                        <h3>Lowest Score</h3>
                        <div class="value">63%</div>
                        <p>William Taylor</p>
                    </div>
                    <div class="stat-card warning">
                        <h3>Standard Deviation</h3>
                        <div class="value">8.2</div>
                        <p>Score distribution</p>
                    </div>
                </div>
                <h3 style="margin-bottom:12px;">Grade Distribution</h3>
                <div class="chart-container">
                    <div class="chart-bars">
                        <div class="chart-bar">
                            <div class="chart-bar-value" style="height: 30%; background-color: #e74c3c;"></div>
                            <div class="chart-bar-label">F (0-59%)</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-value" style="height: 45%; background-color: #f39c12;"></div>
                            <div class="chart-bar-label">D (60-69%)</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-value" style="height: 75%; background-color: #f1c40f;"></div>
                            <div class="chart-bar-label">C (70-79%)</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-value" style="height: 90%; background-color: #2ecc71;"></div>
                            <div class="chart-bar-label">B (80-89%)</div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-value" style="height: 60%; background-color: #3498db;"></div>
                            <div class="chart-bar-label">A (90-100%)</div>
                        </div>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #e74c3c;"></div>
                            <span>3 Students</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #f39c12;"></div>
                            <span>5 Students</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #f1c40f;"></div>
                            <span>12 Students</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #2ecc71;"></div>
                            <span>7 Students</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #3498db;"></div>
                            <span>3 Students</span>
                        </div>
                    </div>
                </div>
                <h3 style="margin-bottom:12px;">Students Below Average (Require Attention)</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>ID</th>
                                <th>Current Score</th>
                                <th>Below Average By</th>
                                <th>Last Assignment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>William Taylor</td>
                                <td>ST10023</td>
                                <td>63%</td>
                                <td>-15.5%</td>
                                <td>60% (Failing)</td>
                                <td><button class="btn btn-sm">Contact Parents</button></td>
                            </tr>
                            <tr>
                                <td>Ava Martinez</td>
                                <td>ST10067</td>
                                <td>65%</td>
                                <td>-13.5%</td>
                                <td>62% (Failing)</td>
                                <td><button class="btn btn-sm">Contact Parents</button></td>
                            </tr>
                            <tr>
                                <td>Michael Lee</td>
                                <td>ST10014</td>
                                <td>68%</td>
                                <td>-10.5%</td>
                                <td>70% (Passing)</td>
                                <td><button class="btn btn-sm">Contact Parents</button></td>
                            </tr>
                            <tr>
                                <td>Isabella García</td>
                                <td>ST10091</td>
                                <td>70%</td>
                                <td>-8.5%</td>
                                <td>68% (Failing)</td>
                                <td><button class="btn btn-sm">Contact Parents</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
</x-admlayout>