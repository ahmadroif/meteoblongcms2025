<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>{{ $product->name }}</h2>
<p>Stok: {{ $product->stock }}</p>

<a href="{{ route('products.edit', $product->id) }}">✏️ Edit</a> |
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">🗑️ Hapus</button>
</form>
<br><br>
<a href="{{ route('products.index') }}">← Kembali ke daftar</a>

</body>
</html>