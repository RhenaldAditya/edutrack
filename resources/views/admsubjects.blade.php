<x-admlayout>
    
<!-- Subject Management Section -->
            <section id="subjects">
                <h2>Subject Management</h2>
                <form>
                    <h3 style="margin-top:0;">Add/Edit Subject</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="subject-code">Kode Mata Pelajaran</label>
                            <input type="text" id="subject-code" placeholder="e.g. MATH101">
                        </div>
                        <div class="form-group">
                            <label for="subject-name">Nama Mata Pelajaran</label>
                            <input type="text" id="subject-name" placeholder="e.g. Advanced Mathematics">
                        </div>
                        <div class="form-group">
                            <label for="subject-credits">Credit Count</label>
                            <input type="number" id="subject-credits" placeholder="e.g. 3" min="1" max="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject-description">Deskripsi</label>
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
                                <th>Nama Mata Pelajaran</th>
                                <th>Deskripsi</th>
                                <th>Credits</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjectDetail as $subject)
                            <tr>
                                <td>MATH101</td>
                                <td>{{ $subject->nama_mata_pelajaran }}</td>
                                <td>{{ $subject->deskripsi_pelajaran }}</td>
                                <td>4</td>
                                <td class="table-actions">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
</x-admlayout>