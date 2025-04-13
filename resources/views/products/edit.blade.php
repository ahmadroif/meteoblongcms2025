<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit Produk</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama Produk: <input type="text" name="name" value="{{ $product->name }}"><br><br>
    Stok: <input type="number" name="stock" value="{{ $product->stock }}"><br><br>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('products.show', $product->id) }}">← Kembali</a>

</body>
</html>