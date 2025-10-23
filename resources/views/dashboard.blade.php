@extends('layouts.app')
@section('title', 'Dashboard') 

@section('content')
    <div class="welcome-message">
        <h1>Selamat Datang, {{ $username ?? 'Tamu' }}!</h1> 
    </div>
    
    <section class="data-cards">
        <div class="card card-proyek">
            <h3>Total Varian Produk</h3>
            <p class="metric-value">{{ $stats['totalProducts'] ?? 0 }}</p>
            <small>Jumlah jenis produk unik yang terdaftar</small>
        </div>

        <div class="card card-fungsi">
            <h3>Unit Terjual (Total)</h3>
            <p class="metric-value">{{ $stats['totalSales'] ?? 0 }}</p>
            <small>Total penjualan unit dalam periode ini</small>
        </div>
        
        <div class="card card-users">
            <h3>Pendapatan Hari Ini</h3>
            <p class="metric-value">Rp {{ number_format($stats['revenueToday'] ?? 0, 0, ',', '.') }}</p>
            <small>Total pendapatan harian</small>
        </div>

        <div class="card card-version">
            <h3>Produk Terlaris</h3>
            <p class="metric-value">{{ $stats['bestSeller'] ?? 'N/A' }}</p>
            <small>Produk dengan penjualan tertinggi</small>
        </div>
        
    </section>
@endsection
