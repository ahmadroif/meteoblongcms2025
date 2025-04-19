@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Penjualan</h1>
        <a href="{{ route('meteoblong.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale['id'] }}</td>
                    <td>{{ $sale['customer'] }}</td>
                    <td>{{ $sale['product'] }}</td>
                    <td>{{ $sale['quantity'] }}</td>
                    <td>{{ $sale['total_price'] }}</td>
                    <td>{{ $sale['order_date'] }}</td>
                    <td>
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
@endsection