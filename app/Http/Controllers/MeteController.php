<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meteoblong;

class MeteController extends Controller
{
    public function index()
    {
        $sales = Meteoblong::all();
        return view('Mete.index', compact('sales'));
    }

    public function create()
    {
        return view('Mete.create');
    }

    public function store(Request $request)
    {
        Meteoblong::create($request->all());
        return redirect()->route('mete.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $sale = Meteoblong::find($id);
        return view('Mete.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Meteoblong::find($id);
        return view('Mete.edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        Meteoblong::update($id, $request->all());
        return redirect()->route('mete.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Meteoblong::delete($id);
        return redirect()->route('mete.index')->with('success', 'Data berhasil dihapus!');
    }
}
