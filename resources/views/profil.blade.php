@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <main class="page-container">
        <h1 class="page-title">
            Profile Pengguna
        </h1>
        <p class="subtitle">Detail informasi akun Anda.</p>
        <div class="card" style="padding: 30px;">
            <h3 style="color: var(--primary-color); margin-bottom: 25px; border-bottom: 2px solid #eee; padding-bottom: 10px; font-size: 1.5rem;">
                Informasi Akun
            </h3>
            <div style="display: grid; grid-template-columns: 150px 1fr; gap: 15px 30px; border-bottom: 1px solid #f0f0f0; padding-bottom: 15px; margin-bottom: 15px;">
                <label style="font-weight: 700; color: #555;">Username:</label>
                <p style="margin: 0;">{{ $username ?? 'Tamu' }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 150px 1fr; gap: 15px 30px; border-bottom: 1px solid #f0f0f0; padding-bottom: 15px; margin-bottom: 15px;">
                <label style="font-weight: 700; color: #555;">Nama Lengkap:</label>
                <p style="margin: 0;">{{ $data_user['name'] ?? 'N/A' }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 150px 1fr; gap: 15px 30px; border-bottom: 1px solid #f0f0f0; padding-bottom: 15px; margin-bottom: 15px;">
                <label style="font-weight: 700; color: #555;">Alamat Email:</label>
                <p style="margin: 0;">{{ $data_user['email'] ?? 'N/A' }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 150px 1fr; gap: 15px 30px; border-bottom: 1px solid #f0f0f0; padding-bottom: 15px; margin-bottom: 15px;">
                <label style="font-weight: 700; color: #555;">Jabatan:</label>
                <p style="margin: 0;">{{ $data_user['jabatan'] ?? 'N/A' }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 150px 1fr; gap: 15px 30px;">
                <label style="font-weight: 700; color: #555;">Status Akun:</label>
                <p style="margin: 0;">
                    @if (($data_user['status'] ?? null) === 'aktif')
                        <span style="font-weight: 700; padding: 4px 8px; border-radius: 4px;" class="badge status-aktif">
                            Aktif
                        </span>
                    @else
                         <span style="font-weight: 700; padding: 4px 8px; border-radius: 4px;" class="badge status-tidak-aktif">
                            Tidak Aktif
                        </span>
                    @endif
                </p>
            </div>
        </div>
    </main>
@endsection
