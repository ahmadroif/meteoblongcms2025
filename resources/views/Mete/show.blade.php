<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
</head>
<body>
<h1>Detail Penjualan #{{ $sale['id'] }}</h1>
<p>Pelanggan: {{ $sale['customer'] }}</p>
<p>Produk: {{ $sale['product'] }}</p>
<p>Jumlah: {{ $sale['quantity'] }}</p>
<p>Total: Rp {{ number_format($sale['total_price'], 0, ',', '.') }}</p>
<a href="{{ route('meteoblong.index') }}">Kembali</a>
</body>
</html>