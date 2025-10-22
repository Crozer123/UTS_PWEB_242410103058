@extends('layouts.app') 

@section('title', 'Login') 

@section('content')
    <div class="login-box-wrapper"> 
        <div class="login-box">
            <h2>Simulasi Login UTS</h2>
            
            {{-- PASTIKAN ACTION INI BENAR! --}}
            <form method="GET" action="{{ route('dashboard') }}">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required placeholder="Username">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                </div>

                <button type="submit" class="btn-primary">
                    Masuk
                </button>
            </form>
        </div>
    </div>
@endsection
