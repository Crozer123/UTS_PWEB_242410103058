@php
    // Ambil username dari query parameter yang ada di URL
    $username = request('username');
    // Ambil nama route saat ini untuk penanda aktif
    $currentRoute = request()->route() ? request()->route()->getName() : '';
@endphp

<nav class="main-navbar">
    
    <div class="navbar-brand">
        <i class="fas fa-money-check-alt icon-brand"></i>
        <span class="text-logo">
            <a href="{{ route('dashboard', ['username' => $username]) }}">Rizqi App</a>
        </span>
    </div>
    
    <ul class="navbar-menu">
        
        <li>
            <a href="{{ route('dashboard', ['username' => $username]) }}"
                class="nav-item @if($currentRoute == 'dashboard') active-nav @endif">
                <i class="fas fa-home icon-nav"></i>
                Dashboard
            </a>
        </li>
        
        <li>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                class="nav-item @if($currentRoute == 'pengelolaan') active-nav @endif">
                <i class="fas fa-boxes icon-nav"></i>
                Pengelolaan
            </a>
        </li>
        
        <li>
            <a href="{{ route('profil', ['username' => $username]) }}"
                class="nav-item @if($currentRoute == 'profil') active-nav @endif">
                <i class="fas fa-user-circle icon-nav"></i>
                Profile
            </a>
        </li>

        <li class="user-info-display">
            <span>Welcome, {{ $username }}!</span>
        </li>
        
    </ul>
</nav>
