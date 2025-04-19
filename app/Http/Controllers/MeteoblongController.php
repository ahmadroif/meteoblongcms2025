<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meteoblong;

class MeteoblongController extends Controller
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
        $data = $request->validate([
            'customer' => 'required',
            'product' => 'required',
            'quantity' => 'required|numeric|min:1',
            'order_date' => 'required|date'
        ]);

        Meteoblong::create($data);
        return redirect()->route('meteoblong.index');
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
        $data = $request->validate([
            'customer' => 'required',
            'product' => 'required',
            'quantity' => 'required|numeric|min:1',
            'order_date' => 'required|date'
        ]);

        Meteoblong::update($id, $data);
        return redirect()->route('meteoblong.index');
    }

    public function destroy($id)
    {
        Meteoblong::delete($id);
        return redirect()->route('meteoblong.index');
    }
}