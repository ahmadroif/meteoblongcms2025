@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Data Penjualan</h1>
        <form action="{{ route('meteoblong.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Customer</label>
                <input type="text" name="customer" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Product</label>
                <input type="text" name="product" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Order Date</label>
                <input type="date" name="order_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection