<!-- Feedback and Evaluation Section -->
<x-admlayout>
<section id="feedback">
                <h2>Feedback and Evaluation</h2>
                <form>
                    <h3 style="margin-top:0;">Submit Feedback</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="feedback-student">Select Student</label>
                            <select id="feedback-student">
                                <option value="">-- Select Student --</option>
                                <option value="emma">Emma Johnson</option>
                                <option value="james">James Smith</option>
                                <option value="olivia">Olivia Davis</option>
                                <option value="noah">Noah Wilson</option>
                                <option value="sophia">Sophia Brown</option>
                                <option value="william">William Taylor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="feedback-type">Feedback Type</label>
                            <select id="feedback-type">
                                <option value="academic">Academic Performance</option>
                                <option value="behavior">Classroom Behavior</option>
                                <option value="participation">Class Participation</option>
                                <option value="improvement">Areas for Improvement</option>
                                <option value="strengths">Strengths & Talents</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="feedback-message">Feedback Message</label>
                        <textarea id="feedback-message" placeholder="Enter detailed feedback..."></textarea>
                    </div>
                    <button type="submit" class="btn">Submit Feedback</button>
                </form>
                <h3>Previous Feedback</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Feedback</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Emma Johnson</td>
                                <td>Academic Performance</td>
                                <td>Oct 15, 2023</td>
                                <td>Emma has demonstrated exceptional problem-solving skills and mathematical reasoning. Her solutions to complex problems show creativity and deep understanding.</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>William Taylor</td>
                                <td>Areas for Improvement</td>
                                <td>Oct 10, 2023</td>
                                <td>William is struggling with basic algebraic concepts. I recommend additional practice with equation solving and more one-on-one tutoring sessions.</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sophia Brown</td>
                                <td>Class Participation</td>
                                <td>Oct 8, 2023</td>
                                <td>Sophia has become more engaged in class discussions. She is asking thoughtful questions and contributing valuable insights to group activities.</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Noah Wilson</td>
                                <td>Strengths & Talents</td>
                                <td>Oct 5, 2023</td>
                                <td>Noah shows exceptional talent in geometric proofs and spatial reasoning. I suggest exploring opportunities for him to participate in the geometry competition.</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
</x-admlayout>