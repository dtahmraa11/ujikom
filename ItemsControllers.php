<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('products.index', compact('items')); // Pastikan path view sesuai
    }

    public function create()
    {
        return view('products.create'); // Pastikan path view sesuai
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Item::create($request->all());

        return redirect()->route('products.index')->with('success', 'Item berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('products.edit', compact('item')); // Pastikan path view sesuai
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('products.index')->with('success', 'Item berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success', 'Item berhasil dihapus.');
    }
}
