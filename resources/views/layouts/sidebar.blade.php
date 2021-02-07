<aside id="sidebar-wrapper ">
    <div class="sidebar-brand">
    <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a> 
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="	{{set_active('dashboard.*')}}">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fas fa-fire"></i> Dashboard
            </a>
        </li>
        <li class="{{set_active('siswa.*')}}">
            <a href="{{route('siswa.index')}}" class="nav-link">
                <i class="fas fa-users"></i> Siswa
            </a>
        </li>
    </ul>
</aside>