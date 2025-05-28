<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTrack - Academic Management System</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styledashboard.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                EduTrack
                <p>Academic Management</p>
            </div>
            <ul class="nav-links">
                <li><x-navlinkadm href="/admindashboard"  :active="request()->is('admindashboard')">Dashboard</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admsubjects" :active="request()->is('admindashboard/admsubjects')">Subject Management</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admgrading" :active="request()->is('admindashboard/admgrading')">Student Grading</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admreports" :active="request()->is('admindashboard/admreports')">Academic Reports</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admperformance" :active="request()->is('admindashboard/admperformance')">Class Performance</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admstudents" :active="request()->is('admindashboard/admstudents')">Student Management</x-navlinkadm></li>
                <li><x-navlinkadm href="/admindashboard/admfeedback" :active="request()->is('admindashboard/admfeedback')">Feedback & Evaluation</x-navlinkadm></li>
            </ul>
        </aside>
        <!-- Main Content Area -->
        <main class="main-content">
            {{-- <header class="header">
                <h1>Academic Management System</h1>
                <div class="user-info">
                    <div class="user-avatar">JD</div>
                    <div>
                        <strong>John Doe</strong>
                        <div style="color:var(--text-muted);font-size:0.97rem;">Mathematics Teacher</div>
                    </div>
                </div>
            </header> --}}
            <div>
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
