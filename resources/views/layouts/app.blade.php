<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB @yield('title', 'Aplikasi')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@if(request()->routeIs('login')) dashboard-container login-layout @else dashboard-container @endif"> 
    @if(request()->routeIs('login'))
        @yield('content')
    @else
        <div id="content-wrapper"> 
            <div id="content"> 
                <header class="header">
                    @include('components.navbar')
                </header>
                <div class="main-content">
                    @yield('content')
                </div>
            </div>       
            <x-footer/>
        </div>
    @endif
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
