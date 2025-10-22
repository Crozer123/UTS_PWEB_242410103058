<nav class="main-navbar">
    
    <div class="navbar-brand">
        <i class="fas fa-cube icon-brand-gradient"></i> 
        <span class="text-logo">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}">Rizqi App</a>
        </span>
    </div>
    
    <ul class="navbar-menu">
        
        <li>
            <a href="{{ route('dashboard', ['username' => request('username')]) }}"
                class="nav-item @if(request()->routeIs('dashboard')) active-nav @endif">
                <i class="fas fa-home icon-nav"></i>
                Dashboard
            </a>
        </li>
        
        <li>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
                class="nav-item @if(request()->routeIs('pengelolaan')) active-nav @endif">
                <i class="fas fa-boxes icon-nav"></i>
                Pengelolaan
            </a>
        </li>
        
        <li>
            <a href="{{ route('profil', ['username' => request('username')]) }}"
                class="nav-item @if(request()->routeIs('profil')) active-nav @endif">
                <i class="fas fa-user-circle icon-nav"></i>
                Profile
            </a>
        </li>

        <li class="user-info-display">
            <span>Welcome, {{ request('username') }}!</span>
        </li>
        
    </ul>
</nav>
