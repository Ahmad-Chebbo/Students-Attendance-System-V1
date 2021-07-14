<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-default-2" id="sidenav-main" aria-hidden="true">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <h2 class="text-white">{{ Config::get('settings.site_name') }}</h2>
            </a>
        </div>
        <hr class="my-1">
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('manage/dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <!-- Heading -->
                    <h6 class="navbar-heading py-3 text-white">
                        <span class="docs-normal">Actions</span>
                    </h6>
                    <!-- End Heading -->
                    <!-- Action -->
                    <!-- Add Students -->
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('manage/student*')) ? 'active' : '' }}" href="{{ route('student.index') }}">
                            <i class="fas fa-users-class text-primary"></i>
                            <span class="nav-link-text">Students</span>
                        </a>
                    </li>
                    <!-- End Students -->
                    <!-- Add Courses -->
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('manage/subject*')) ? 'active' : '' }}" href="{{ route('subject.index') }}">
                            <i class="fas fa-book-open text-primary"></i>
                            <span class="nav-link-text">Courses</span>
                        </a>
                    </li>
                    <!-- End Courses -->
                    <!-- Add Attendance -->
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('manage/attendance*')) ? 'active' : '' }}" href="{{ route('attendance.index') }}">
                            <i class="fas fa-calendar-alt text-primary"></i>
                            <span class="nav-link-text">Attendance</span>
                        </a>
                    </li>
                    <!-- End Attendance -->
                    <!-- Add Attendance -->
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('manage/setting*')) ? 'active' : '' }}" href="{{ route('settings.index') }}">
                            <i class="ni ni-settings text-primary"></i>
                            <span class="nav-link-text">Setting</span>
                        </a>
                    </li>
                    <!-- End Attendance -->
                    <!-- End Action -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <i class="ni ni-user-run text-primary"></i>
                            <span class="nav-link-text">Logout</span>
                            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
