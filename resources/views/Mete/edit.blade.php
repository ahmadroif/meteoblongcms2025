@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Data Penjualan</h1>
        <form action="{{ route('mete.update', $sale['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Customer</label>
                <input type="text" name="customer" class="form-control" value="{{ $sale['customer'] }}" required>
            </div>
            <div class="mb-3">
                <label>Product</label>
                <input type="text" name="product" class="form-control" value="{{ $sale['product'] }}" required>
            </div>
            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ $sale['quantity'] }}" required>
            </div>
            <div class="mb-3">
                <label>Order Date</label>
                <input type="date" name="order_date" class="form-control" value="{{ $sale['order_date'] }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection