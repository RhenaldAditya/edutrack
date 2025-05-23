<!-- Top Navigation Bar -->
<nav class="navbar">
    <div class="container nav-container">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            EduTrack
        </div>
        <ul class="nav-links">
            <li><x-navlink href="/" :active="request()->is('/')">Dashboard</x-navlink></li>
            <li><x-navlink href="/grades" :active="request()->is('grades')">My Grades</x-navlink></li>
            <li><x-navlink href="/performance" :active="request()->is('performance')">Performance</x-navlink></li>
            <li><x-navlink href="/report" :active="request()->is('report')">Report</x-navlink></li>
            <li><x-navlink href="/login" :active="request()->is('login')">Logout</x-navlink></li>
        </ul>
    </div>
</nav>