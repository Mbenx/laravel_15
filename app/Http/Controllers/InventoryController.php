<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Archive;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Inventory::all();
        return view('inventory/home', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $req)
    {
        $inventory = Inventory::create([
            'name' => $req->inventory_name,
            'detail' => $req->inventory_detail
        ]);

        $last_inventory_id = $inventory->id;
        // dd($insertedId);

        // $last_inventory = Inventory::where('name', $req->inventory_name)
        // ->get()->last();

        // dd($last_inventory);
        Archive::create([
            'inventory_id' => $last_inventory_id,
            'name' => $req->archive_name,
            'detail' => $req->archive_detail
        ]);

        return redirect('/inventory');
    }

    public function show($id)
    {
        $data = Inventory::where('id','=',$id)->first();
        return view('inventory/show', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = Inventory::where('id','=',$id)->first();
        $archive = Archive::where('inventory_id','=',$id)
        ->first();
        return view('inventory/edit', [
            'data' => $data,
            'archive' => $archive
        ]);
    }

    public function update(Request $request)
    {
        Inventory::where('id','=',$request->id)->update([
            'name' => $request->inventory_name,
            'detail' => $request->inventory_detail
        ]);

        Archive::where('id','=',$request->archive_id)->update([
            'name' => $request->archive_name,
            'detail' => $request->archive_detail
        ]);

        return redirect('/inventory');
    }

    public function destroy($id)
    {
        // mass asignment
        Inventory::where('id', '=', $id)->delete();
        Archive::where('inventory_id','=',$id)->delete();

        return redirect("/inventory");
    }
}
