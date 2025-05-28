<x-admlayout>
    
<!-- Subject Management Section -->
            <section id="subjects">
                <h2>Subject Management</h2>
                <form>
                    <h3 style="margin-top:0;">Add/Edit Subject</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="subject-code">Subject Code</label>
                            <input type="text" id="subject-code" placeholder="e.g. MATH101">
                        </div>
                        <div class="form-group">
                            <label for="subject-name">Subject Name</label>
                            <input type="text" id="subject-name" placeholder="e.g. Advanced Mathematics">
                        </div>
                        <div class="form-group">
                            <label for="subject-credits">Credit Count</label>
                            <input type="number" id="subject-credits" placeholder="e.g. 3" min="1" max="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject-description">Description</label>
                        <textarea id="subject-description" placeholder="Enter subject description..."></textarea>
                    </div>
                    <button type="submit" class="btn">Save Subject</button>
                </form>
                <h3>All Subjects</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Credits</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MATH101</td>
                                <td>Calculus I</td>
                                <td>Introduction to differential calculus</td>
                                <td>4</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PHY201</td>
                                <td>Classical Mechanics</td>
                                <td>Study of physical phenomena in classical mechanics</td>
                                <td>3</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CHEM101</td>
                                <td>General Chemistry</td>
                                <td>Fundamentals of chemistry and chemical processes</td>
                                <td>4</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>BIO150</td>
                                <td>Cell Biology</td>
                                <td>Study of cell structure, function, and processes</td>
                                <td>3</td>
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