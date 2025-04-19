<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penjualan</title>
</head>
<body>
    <h1>Edit Data Penjualan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('meteoblong.update', $sale['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="customer" value="{{ $sale['customer'] }}" required>
    <input type="text" name="product" value="{{ $sale['product'] }}" required>
    <input type="number" name="quantity" value="{{ $sale['quantity'] }}" min="1" required>
    <input type="date" name="order_date" value="{{ $sale['order_date'] }}" required>
    <button type="submit">Update</button>
</form>
</body>
</html>