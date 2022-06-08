<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items',compact('items'));
    }

    public function showAllItem()
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    public function add()
    {
        return view('items.add');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'nama' => 'required|string|min:5|max:80',
            'harga' => 'required|integer|min:1',
            'jumlah' => 'required|integer|min:1',
        ]);

        Item :: create([
            'nama' => $request-> nama,
            'harga' => $request-> harga,
            'jumlah'=>$request-> jumlah,
        ]);
        return redirect('/manage')->with('success_status','Item(s) Added');
    }

    public function edit($id)
    {
        $item = Item :: findOrFail($id);
        return view('items.edit',compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request ->validate([
            'nama' => 'required|string|min:5|max:80',
            'harga' => 'required|integer|min:1',
            'jumlah' => 'required|integer|min:1',
        ]);

        $game = Item::findOrFail($id);
        $game ->update([
            'nama' => $request-> nama,
            'harga' => $request-> harga,
            'jumlah'=>$request-> jumlah,
        ]);
        return redirect('/manage')->with('success_status','Updated Item(s)');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/manage')->with('success_status','Deleted Item(s)');
    }
}
