<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Produk</h1>
<a href="{{ route('products.create') }}">Tambah Produk</a>

<ul>
    @foreach ($products as $product)
        <li>
            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
            - <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        </li>
    @endforeach
</ul>

</body>
</html>