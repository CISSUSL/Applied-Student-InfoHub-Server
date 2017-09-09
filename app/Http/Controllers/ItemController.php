<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItem;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('pages.items.index', ['items' => $items]);
    }


    public function show($id)
    {
        $item = Item::find($id);
        return view('pages.items.show', ['item' => $item]);
    }



    public function create()
    {
        return view('pages.items.create');
    }



    public function store(StoreItem $request)
    {
        $item = new Item();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return redirect()->route('items.index')->with(session()->flash('alert-success', 'Item Created!'));
    }



    public function edit($id)
    {
        $item = Item::find($id);
        return view('pages.items.edit', ['item' => $item]);
    }



    public function update(StoreItem $request, $id)
    {
        $item = Item::find($id);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
        return redirect()->route('items.index')->with(session()->flash('alert-success', 'Item Updated!'));
    }



    public function destroy($id)
    {
        $project = Item::find($id);
        $project->delete();

        return redirect()->route('items.index')->with(session()->flash('alert-success', 'Item Deleted!'));
    }
}
