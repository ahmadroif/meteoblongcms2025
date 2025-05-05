<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meteoblong;

class MeteController extends Controller
{
    public function index()
    {
        $sales = Meteoblong::all();
        return view('mete.index', compact('sales'));
    }

    public function create()
    {
        return view('mete.create');
    }

    public function store(Request $request)
    {
        $pricePerItem = 50000;
        $data = $request->except('_token');
        $data['order_date'] = now();
        $data['total_price'] = $data['quantity'] * $pricePerItem;
    
        Meteoblong::create($data);
    
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    

    public function show($id)
    {
        $sale = Meteoblong::find($id);
        return view('mete.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Meteoblong::find($id);
        return view('mete.edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
   // Temukan entri berdasarkan ID
$meteoblong = Meteoblong::find($id);

// Periksa apakah entri ditemukan
if ($meteoblong) {
    // Update entri dengan data dari request
    $meteoblong->update($request->all());
} else {
    // Tangani jika entri tidak ditemukan
    return response()->json(['message' => 'Data not found'], 404);
}

        return redirect()->route('meteoblong.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $sale = Meteoblong::find($id);
        $sale?->delete();     
        return redirect()->route('meteoblong.index')->with('success', 'Data berhasil dihapus!');
    }
}
