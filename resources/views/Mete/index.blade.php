@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Penjualan</h1>
        <a href="{{ route('meteoblong.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">ID</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                            <tr>
                                <td><span class="text-muted">{{ $sale['id'] }}</span></td>
                                <td>{{ $sale['customer'] }}</td>
                                <td>{{ $sale['product'] }}</td>
                                <td>{{ $sale['quantity'] }}</td>
                                <td>${{ $sale['total_price'] }}</td>
                                <td>{{ $sale['order_date'] }}</td>
                                <td>
                                    @php
                                        $status = strtolower($sale['status'] ?? 'pending');
                                        $statusColor = match($status) {
                                            'paid' => 'bg-success',
                                            'pending' => 'bg-warning',
                                            'due' => 'bg-secondary',
                                            'overdue' => 'bg-danger',
                                            default => 'bg-secondary'
                                        };
                                    @endphp
                                    <span class="status-icon {{ $statusColor }}"></span> {{ ucfirst($status) }}
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('meteoblong.show', $sale['id']) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('meteoblong.edit', $sale['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('meteoblong.destroy', $sale['id']) }}" method="POST" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
