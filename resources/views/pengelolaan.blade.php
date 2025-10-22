@extends('layouts.app')

@section('title', 'Pengelolaan Akun')

@section('content')

    @php
        $username = request('username') ?? 'Tamu';
    @endphp

    <main class="page-container">
        <h1 class="page-title">
            Pengelolaan Akun
        </h1>
        <p class="subtitle">Daftar pengguna terdaftar dalam sistem (Data berasal dari PageController).</p>

        <div class="table-management-wrapper">
            
            <div class="table-controls">
                <input type="text" placeholder="Search..."
                    class="search-input">
                
                <a href="#" class="btn btn-tambah">
                    Tambah Akun
                </a>
            </div>
            
            <div class="table-responsive">

                <table class="data-table">
                    <thead>
                        <tr>
                            <th class="table-header">Username</th>
                            <th class="table-header">Email</th>
                            <th class="table-header">Status</th>
                            <th class="table-header">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- 🔑 LOOPING DATA WAJIB UTS (Poin 5) --}}
                        @foreach ($users as $user)
                            <tr class="table-row">
                                <td class="table-cell">{{ $user['name'] }}</td>
                                <td class="table-cell">{{ $user['email'] }}</td>
                                <td class="table-cell">
                                    <span class="badge badge-{{ $user['status'] == 'aktif' ? 'success' : 'danger' }}">
                                        {{ ucfirst($user['status']) }}
                                    </span>
                                </td>
                                <td class="table-cell table-actions">
                                    <a class="action-link link-edit" href="#">Edit</a>
                                    <a class="action-link link-delete" href="#">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection