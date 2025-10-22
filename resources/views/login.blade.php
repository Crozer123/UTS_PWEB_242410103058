@extends('layouts.app') 

@section('title', 'Login') 

@section('content')
    <div class="login-box-wrapper dashboard-container login-layout"> 
        <div class="login-box">
            <h2>Welcome sir</h2>
            
            <form method="GET" action="{{ route('dashboard') }}">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required placeholder="Masukkan Username Anda">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Masukkan Password Anda">
                </div>

                <button type="submit" class="btn-primary">
                    Masuk
                </button>
            </form>
        </div>
    </div>
@endsection
