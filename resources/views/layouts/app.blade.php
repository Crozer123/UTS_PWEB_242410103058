<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB @yield('title', 'Aplikasi')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@if(request()->routeIs('login')) c-auth @else c-dash @endif"> 

    @if(request()->routeIs('login'))
        @yield('content')
    @else
        <div id="wrapper"> 
            
            <div id="content-wrapper">
                <div id="content">
                    
                    <header class="header">
                        @include('components.navbar')
                    </header>

                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @include('components.footer')
                
            </div> 
        </div>
    @endif
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
