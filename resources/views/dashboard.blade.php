@extends('layouts.app')
@section('title', 'Dashboard Toko Online') 
@section('content')

    @php
        // Ambil variabel yang dikirim dari PageController::dashboard()
        $username = $username ?? 'Tamu';
        
        // Data metrik yang baru, sesuai dengan $stats_data di Controller
        $totalProducts = $stats['totalProducts'] ?? 0;
        $totalSales = $stats['totalSales'] ?? 0;
        $revenueToday = $stats['revenueToday'] ?? 0;
        $bestSeller = $stats['bestSeller'] ?? 'N/A';
    @endphp
    
    <div class="welcome-message">
        {{-- Syarat Khusus #1: Username ditampilkan --}}
        <h1>Selamat Datang, {{ $username }}!</h1> 
        <p>Ringkasan penjualan dan stok produk Toko Online.</p>
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
            {{-- Menggunakan number_format untuk tampilan mata uang yang bersih --}}
            <p class="metric-value">Rp {{ number_format($revenueToday, 0, ',', '.') }}</p>
            <small>Total pendapatan harian</small>
        </div>

        <div class="card card-version">
            <h3>Produk Terlaris</h3>
            <p class="metric-value">{{ $bestSeller }}</p>
            <small>Produk dengan penjualan tertinggi</small>
        </div>
        
    </section>
    
    <hr style="margin: 30px 0; border-color: #eee;">

    <section class="extra-content">
        <h2>Aktivitas dan Detail Stok</h2>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
            
            <div class="detail-box">
                <h3>Trend Penjualan Mingguan (Placeholder Grafik)</h3>
                <div style="height: 300px; display: flex; align-items: center; justify-content: center; color: #777; background-color: #f7f7f7; border-radius: 6px;">
                    [Tempat untuk Chart Penjualan Anda]
                </div>
            </div>

            <div class="detail-box">
                <h3>Aktivitas Terbaru</h3>
                <ul class="activity-list">
                    {{-- Ganti aktivitas Go/Sistem dengan aktivitas Toko Online --}}
                    <li><small>{{ date('H:i') }}:</small> User **{{ $username }}** masuk ke dashboard.</li>
                    <li><small>15 menit lalu:</small> **{{ $bestSeller }}** (Laptop) terjual 3 unit.</li>
                    <li><small>1 jam lalu:</small> Stok **Lenovo ideapad 5** diperbarui.</li>
                    <li><small>3 jam lalu:</small> Laporan inventaris dibuat.</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
