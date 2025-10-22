@extends('layouts.app')

@section('title', 'Pengelolaan Produk')

@section('content')

    <h1 class="page-title">
        Pengelolaan Produk
    </h1>
    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="table-header" style="width: 10%;">ID</th>
                    <th class="table-header" style="width: 40%;">NAMA PRODUK</th>
                    <th class="table-header" style="width: 15%;">STOK</th>
                    <th class="table-header" style="width: 25%;">HARGA</th>
                    <th class="table-header" style="width: 10%;">STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products ?? [] as $product)
                    <tr class="table-row">
                        <td class="table-cell">{{ $product['id'] ?? 'N/A' }}</td>
                        <td class="table-cell">{{ $product['name'] ?? 'N/A' }}</td>
                        <td class="table-cell">{{ $product['stok'] ?? '0' }}</td>
                        <td class="table-cell">Rp {{ number_format($product['price'] ?? 0, 0, ',', '.') }}</td>
                        <td class="table-cell">
                            {{ ucfirst($product['status'] ?? 'N/A') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
