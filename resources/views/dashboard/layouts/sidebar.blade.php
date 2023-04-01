<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            @if (auth()->user()->level == 'admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/admin/data/student*') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/admin/data/student">
                        <span data-feather="users"></span>
                        Data Siswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="">
                        <span data-feather="users"></span>
                        Data Guru
                    </a>
                </li>
            @endif

            @if (auth()->user()->level == 'student')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="">
                        <span data-feather="home"></span>
                        Rekap Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="">
                        <span data-feather="home"></span>
                        Jadwal Pelajaran
                    </a>
                </li>
            @endif

        </ul>

    </div>
</nav>
