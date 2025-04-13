<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="name">
    Stok: <input type="number" name="stock">
    <button type="submit">Simpan</button>
</form>

</body>
</html>