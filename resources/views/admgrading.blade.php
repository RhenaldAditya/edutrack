<x-admlayout>
    <!-- Student Grading Section -->
            <section id="grading">
                <h2>Student Grading</h2>
                <div class="form-group">
                    <label for="select-class">Select Class</label>
                    <select id="select-class">
                        <option value="class-10a">Class 10A - Mathematics</option>
                        <option value="class-11b">Class 11B - Physics</option>
                        <option value="class-9c">Class 9C - Chemistry</option>
                    </select>
                </div>
                <div class="alert alert-warning">
                    Reminder: Final grades will be locked on November 15, 2023.
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Student Name</th>
                                <th>ID</th>
                                <th>Assignment (30%)</th>
                                <th>Participation (20%)</th>
                                <th>Midterm (20%)</th>
                                <th>Final (30%)</th>
                                <th>Total</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Emma Johnson</td>
                                <td>ST10045</td>
                                <td><input type="number" value="28" min="0" max="30"></td>
                                <td><input type="number" value="18" min="0" max="20"></td>
                                <td><input type="number" value="19" min="0" max="20"></td>
                                <td><input type="number" value="28" min="0" max="30"></td>
                                <td>93</td>
                                <td><span class="status-badge above-average">A</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>James Smith</td>
                                <td>ST10078</td>
                                <td><input type="number" value="27" min="0" max="30"></td>
                                <td><input type="number" value="17" min="0" max="20"></td>
                                <td><input type="number" value="18" min="0" max="20"></td>
                                <td><input type="number" value="28" min="0" max="30"></td>
                                <td>90</td>
                                <td><span class="status-badge above-average">A</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Olivia Davis</td>
                                <td>ST10032</td>
                                <td><input type="number" value="25" min="0" max="30"></td>
                                <td><input type="number" value="18" min="0" max="20"></td>
                                <td><input type="number" value="17" min="0" max="20"></td>
                                <td><input type="number" value="26" min="0" max="30"></td>
                                <td>86</td>
                                <td><span class="status-badge above-average">B</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Noah Wilson</td>
                                <td>ST10056</td>
                                <td><input type="number" value="24" min="0" max="30"></td>
                                <td><input type="number" value="16" min="0" max="20"></td>
                                <td><input type="number" value="15" min="0" max="20"></td>
                                <td><input type="number" value="25" min="0" max="30"></td>
                                <td>80</td>
                                <td><span class="status-badge above-average">B</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sophia Brown</td>
                                <td>ST10089</td>
                                <td><input type="number" value="20" min="0" max="30"></td>
                                <td><input type="number" value="14" min="0" max="20"></td>
                                <td><input type="number" value="14" min="0" max="20"></td>
                                <td><input type="number" value="22" min="0" max="30"></td>
                                <td>70</td>
                                <td><span class="status-badge average">C</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>William Taylor</td>
                                <td>ST10023</td>
                                <td><input type="number" value="18" min="0" max="30"></td>
                                <td><input type="number" value="12" min="0" max="20"></td>
                                <td><input type="number" value="13" min="0" max="20"></td>
                                <td><input type="number" value="20" min="0" max="30"></td>
                                <td>63</td>
                                <td><span class="status-badge below-average">D</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <button type="button" class="btn">Save Grades</button>
                    <button type="button" class="btn btn-secondary">Publish Grades</button>
                </div>
            </section>
</x-admlayout>