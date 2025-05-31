<x-admlayout>
    <!-- Student Grading Section -->
            <section id="grading">
                <h2>Penilaian Siswa</h2>
                <div class="form-group">
                    <label for="select-class">Pilih Kelas</label>
                    <select id="select-class">
                        <option value="X-MIPA">X - MIPA</option>
                        <option value="X-IPS">X - IPS</option>
                        {{-- <option value="class-9c">Class 9C - Chemistry</option> --}}
                    </select>
                </div>
                <div class="alert alert-warning">
                    Reminder: Final grades will be locked on November 15, 2023.
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Student Name</th>
                                <th>ID</th>
                                <th>Nilai Tugas (%)</th>
                                <th>Nilai Ujian (%)</th>
                                <th>Nilai Partisipasi (%)</th>
                                <th style="width: 20%">Total</th>
                                <th>Grade</th>
                                <th>Aksi</th> </tr>
                        </thead>
                        <tbody id="gradeTableBody">
                            <tr>
                                <td>1</td> <td>Rizky Putra Pratama</td>
                                <td>1 - X MIPA</td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="nilai-total-row" value="0" style="width: 120px;" readonly></td>
                                <td><span class="grade-badge">-</span></td>
                                <td><button type="button" class="btn-hapus-baris" onclick="hapusBaris(this)">Hapus</button></td>
                            </tr>
                            <tr>
                                <td>2</td> <td>James Smith</td>
                                <td>ST10078</td>
                                <td><input type="number" value="27" min="0" max="30"></td> <td><input type="number" value="17" min="0" max="20"></td> <td><input type="number" value="18" min="0" max="20"></td> <td>90</td>
                                <td><span class="status-badge above-average">A</span></td>
                                <td><button type="button" class="btn-hapus-baris" onclick="hapusBaris(this)">Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="display-flex">
                    {{-- <button type="button" class="btn">Save Grades</button> --}}
                    <button type="button" class="btn btn-secondary">Submit Nilai</button>
                    <button type="button" id="btnTambahData" class="btn ms-auto" style="align-items: right">Tambah Data</button>
                </div>

                <script>
                    // Fungsi untuk menghitung total dan grade untuk satu baris
                    function hitungTotalBaris(inputElement) {
                        const row = inputElement.closest('tr');
                        if (!row) return; // Keluar jika tidak menemukan baris (safety check)

                        const arrInputNilai = row.querySelectorAll('.input-nilai-siswa-row');
                        const outputTotal = row.querySelector('.nilai-total-row');
                        const outputGrade = row.querySelector('.grade-badge');
                        let totalNilai = 0;

                        arrInputNilai.forEach(input => {
                            totalNilai += parseFloat(input.value) || 0;
                        });

                        const rataRata = arrInputNilai.length > 0 ? totalNilai / 3 : 0;
                        
                        if (outputTotal) {
                            outputTotal.value = rataRata.toFixed(2);
                        }
                        
                        if (outputGrade) {
                            tentukanGradeBaris(rataRata, outputGrade);
                        }
                    }

                    // Fungsi untuk menentukan grade berdasarkan rata-rata
                    function tentukanGradeBaris(rataRata, gradeElement) {
                        let grade = '-';
                        let gradeClass = 'grade-badge'; // Kelas dasar

                        if (rataRata >= 90) {
                            grade = 'A';
                            gradeClass += ' status-badge above-average';
                        } else if (rataRata >= 80) {
                            grade = 'B';
                            gradeClass += ' status-badge average';
                        } else if (rataRata >= 70) {
                            grade = 'C';
                            gradeClass += ' status-badge below-average';
                        } else if (rataRata >= 60) {
                            grade = 'D';
                            // Tambahkan kelas spesifik jika ada
                        } else if (rataRata >= 0 && rataRata < 60 && gradeElement.closest('tr').querySelector('.input-nilai-siswa-row[value="0"]') !== null) { // Pastikan ada inputan dulu
                            // Hanya set E jika ada inputan, bukan hanya nilai 0 default
                            if(gradeElement.closest('tr').querySelectorAll('.input-nilai-siswa-row').some(inp => inp.value !== "0")) grade = 'E'; else grade = '-';

                        } else {
                            grade = '-';
                        }
                        gradeElement.textContent = grade;
                        gradeElement.className = gradeClass; // Ini akan mengganti semua kelas, hati-hati jika ada kelas lain yang penting
                    }
                    
                    // Fungsi untuk mengatur ulang nomor urut baris
                    function aturUlangNomorBaris() {
                        const tableBody = document.getElementById('gradeTableBody');
                        const allRows = tableBody.querySelectorAll('tr');
                        allRows.forEach((row, index) => {
                            const noCell = row.querySelector('td:first-child');
                            if (noCell) {
                                noCell.textContent = index + 1;
                            }
                        });
                    }

                    // Fungsi untuk menambah baris baru ke tabel
                    function tambahBaris() {
                        const tableBody = document.getElementById('gradeTableBody');
                        const newRowHTML = `
                            <tr>
                                <td></td> <td><input type="text" placeholder="Nama Siswa" style="width:100%;"></td>
                                <td><input type="text" placeholder="ID Siswa" style="width:100%;"></td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="input-nilai-siswa-row" value="0" min="0" max="100" oninput="hitungTotalBaris(this)"></td>
                                <td><input type="number" class="nilai-total-row" value="0" style="width: 120px;" readonly></td>
                                <td><span class="grade-badge">-</span></td>
                                <td><button type="button" class="btn-hapus-baris" onclick="hapusBaris(this)">Hapus</button></td>
                            </tr>
                        `;
                        tableBody.insertAdjacentHTML('beforeend', newRowHTML);
                        
                        const newAddedRow = tableBody.lastElementChild;
                        if(newAddedRow){
                            const firstInputNewRow = newAddedRow.querySelector('.input-nilai-siswa-row');
                            if(firstInputNewRow) {
                                hitungTotalBaris(firstInputNewRow); // Inisialisasi total & grade untuk baris baru
                            }
                        }
                        aturUlangNomorBaris(); // Atur ulang nomor setelah baris baru ditambahkan
                    }

                    // Fungsi untuk menghapus baris
                    function hapusBaris(buttonElement) {
                        const row = buttonElement.closest('tr');
                        if (row) {
                            row.remove();
                            aturUlangNomorBaris(); // Atur ulang nomor setelah baris dihapus
                        }
                    }

                    // Tambahkan event listener ke tombol "Tambah Data"
                    document.getElementById('btnTambahData').addEventListener('click', tambahBaris);

                    // Inisialisasi saat halaman dimuat
                    document.addEventListener('DOMContentLoaded', () => {
                        // Hitung total & grade untuk baris dinamis yang sudah ada
                        document.querySelectorAll('#gradeTableBody tr').forEach(row => {
                            const firstDynamicInput = row.querySelector('.input-nilai-siswa-row');
                            if (firstDynamicInput) {
                                hitungTotalBaris(firstDynamicInput);
                            }
                        });
                        // Atur nomor baris awal
                        aturUlangNomorBaris();
                    });
                </script>
            </section>
</x-admlayout>