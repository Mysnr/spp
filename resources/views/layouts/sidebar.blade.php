<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
    <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a> 
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li>
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fas fa-fire"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('siswa.index')}}" class="nav-link">
                <i class="fas fa-users"></i> Siswa
            </a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Logout
        </a>
    </div>
</aside>