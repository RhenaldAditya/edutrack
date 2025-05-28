<!-- Student Account Management Section -->
<x-admlayout>
    <section id="students">
                <h2>Student Account Management</h2>
                <form>
                    <h3 style="margin-top:0;">Add/Edit Student</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="student-name">Full Name</label>
                            <input type="text" id="student-name" placeholder="e.g. John Smith">
                        </div>
                        <div class="form-group">
                            <label for="student-id">ID Number</label>
                            <input type="text" id="student-id" placeholder="e.g. ST10001">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="student-email">Email</label>
                            <input type="email" id="student-email" placeholder="e.g. john.smith@example.com">
                        </div>
                        <div class="form-group">
                            <label for="student-class">Assigned Class</label>
                            <select id="student-class">
                                <option value="class-10a">Class 10A - Mathematics</option>
                                <option value="class-11b">Class 11B - Physics</option>
                                <option value="class-9c">Class 9C - Chemistry</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="student-dob">Date of Birth</label>
                            <input type="text" id="student-dob" placeholder="MM/DD/YYYY">
                        </div>
                        <div class="form-group">
                            <label for="student-parent">Parent/Guardian</label>
                            <input type="text" id="student-parent" placeholder="e.g. Mary Smith">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="student-address">Address</label>
                        <textarea id="student-address" placeholder="Enter student address..."></textarea>
                    </div>
                    <button type="submit" class="btn">Save Student</button>
                </form>
                <h3>All Students</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ST10045</td>
                                <td>Emma Johnson</td>
                                <td>emma.johnson@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ST10078</td>
                                <td>James Smith</td>
                                <td>james.smith@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ST10032</td>
                                <td>Olivia Davis</td>
                                <td>olivia.davis@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ST10056</td>
                                <td>Noah Wilson</td>
                                <td>noah.wilson@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ST10089</td>
                                <td>Sophia Brown</td>
                                <td>sophia.brown@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ST10023</td>
                                <td>William Taylor</td>
                                <td>william.taylor@example.com</td>
                                <td>10A</td>
                                <td>Active</td>
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