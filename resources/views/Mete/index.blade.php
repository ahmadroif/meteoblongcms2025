<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penjualan</title>
</head>
<body>
    <h1>Daftar Penjualan</h1>
    <a href="{{ route('meteoblong.create') }}">Tambah Data</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
        @forelse ($sales as $sale)
            <tr>
                <td>{{ $sale['id'] }}</td>
                <td>{{ $sale['customer'] }}</td>
                <td>{{ $sale['product'] }}</td>
                <td>{{ $sale['quantity'] }}</td>
                <td>Rp {{ number_format($sale['total_price'], 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('meteoblong.show', $sale['id']) }}">Detail</a>
                    <a href="{{ route('meteoblong.edit', $sale['id']) }}">Edit</a>
                    <form action="{{ route('meteoblong.destroy', $sale['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data</td>
            </tr>
        @endforelse
    </table>
</body>
</html>