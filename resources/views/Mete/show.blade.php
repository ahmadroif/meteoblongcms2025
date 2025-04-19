@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Penjualan</h1>
        <p><strong>Customer:</strong> {{ $sale['customer'] }}</p>
        <p><strong>Product:</strong> {{ $sale['product'] }}</p>
        <p><strong>Quantity:</strong> {{ $sale['quantity'] }}</p>
        <p><strong>Total Price:</strong> {{ $sale['total_price'] }}</p>
        <p><strong>Order Date:</strong> {{ $sale['order_date'] }}</p>
        <a href="{{ route('meteoblong.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection