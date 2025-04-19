<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan Baru</title>
</head>
<body>
    <h1>Tambah Penjualan Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('meteoblong.store') }}" method="POST">
    @csrf
    <input type="text" name="customer" placeholder="Nama Pelanggan" required>
    <input type="text" name="product" placeholder="Nama Produk" required>
    <input type="number" name="quantity" placeholder="Jumlah" min="1" required>
    <input type="date" name="order_date" required>
    <button type="submit">Simpan</button>
</form>
</body>
</html>