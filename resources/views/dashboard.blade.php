@extends('layouts.app')
@section('title', 'Dashboard Toko Online') 

@section('content')

    {{-- Data $stats harus dikirim dari PageController::dashboard() --}}
    @php
        $username = $username ?? 'Tamu';
        $totalProducts = $stats['totalProducts'] ?? 0;
        $totalSales = $stats['totalSales'] ?? 0;
        $revenueToday = $stats['revenueToday'] ?? 0;
        $bestSeller = $stats['bestSeller'] ?? 'N/A';
    @endphp
    
    <div class="welcome-message">
        <h1>Selamat Datang, {{ $username }}!</h1> 
    </div>
    
    <section class="data-cards">
        
        <div class="card card-proyek">
            <h3>Total Varian Produk</h3>
            <p class="metric-value">{{ $totalProducts }}</p>
            <small>Jumlah jenis produk unik yang terdaftar</small>
        </div>

        <div class="card card-fungsi">
            <h3>Unit Terjual (Total)</h3>
            <p class="metric-value">{{ $totalSales }}</p>
            <small>Total penjualan unit dalam periode ini</small>
        </div>
        
        <div class="card card-users">
            <h3>Pendapatan Hari Ini</h3>
            <p class="metric-value">Rp {{ number_format($revenueToday, 0, ',', '.') }}</p>
            <small>Total pendapatan harian</small>
        </div>

        <div class="card card-version">
            <h3>Produk Terlaris</h3>
            <p class="metric-value">{{ $bestSeller }}</p>
            <small>Produk dengan penjualan tertinggi</small>
        </div>
        
    </section>

@endsection
