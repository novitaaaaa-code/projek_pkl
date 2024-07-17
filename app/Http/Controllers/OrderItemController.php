<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use App\Models\Produk;
use Alert;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $order_item =Order_item::all();
        confirmDelete('Hapus?','Anda Yakin Ingin Menghapusnya?');
        return view('admin.order_item.index', compact('order_item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $order_item = Order_item::all();
        return view('admin.order_item.create', compact('order_item','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'produk_id' => 'required',
            'quantity' => 'required|unique:order_items,quantity',
            'price' => 'required|unique:order_items,price',

        ]);
         $order_item = new Order_item();
         $order_item->produk_id = $request->produk_id;
         $order_item->quantity = $request->quantity;
         $order_item->price = $request->price;
         $order_item->save();

         Alert::success('success', 'Data Berhasil Ditambahkan')->autoClose(1000);
         return redirect()->route('$order_item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_item $order_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        return view('admin.order_item.edit', compact('order_item', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'produk_id' => 'required',
            'quantity' => 'required|unique:order_items,quantity',
            'price' => 'required|unique:order_items,price',
          ]);
          $produk = Produk::findOrFail($id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order_item = Order_item::findOrFail($id);
        $order_item->delete();
        Alert::success('success','data berhasil di hapus')->autoClose(1000);
        return redirect()->route('order_item.index');

    }
}
