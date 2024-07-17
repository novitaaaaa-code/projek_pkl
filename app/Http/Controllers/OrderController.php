<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $order = Order::all();
        confirmDelete('Hapus?','Anda Yakin Ingin Menghapusnya?');
        return view('admin.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $order = Order::all();
        return view('admin.order.create', compact('order','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'user_id' => 'required',
            'order_status' => 'required',
            'total_price' => 'required',
            'shipping_address' => 'required',
        ]);
         $order = new Order();
         $order->user_id =$request->user_id;
         $order->order_status = $request->order_status;
         $order->total_price = $request->total_price;
         $order->shipping_address = $request->shipping_address;
         $order->save();

         Alert::success('success', 'Data Berhasil Dtambahkan')->autoClose(1000);
         return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $id)
    {
        $order = Order::findOrFail($id);
        $user = User::all();
        return view('admin.order.edit', compact('order', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'order_status' => 'required',
            'total_peice' => 'required',
            'shipping_address' => 'required',

          ]);
          $order = Order::findOrFail($id);
          $order->user_id =$request->user_id;
          $order->order_status = $request->order_status;
          $order->total_price = $request->total_price;
          $order->shipping_address = $request->shipping_address;
          $order->save();

          Alert::success('success', 'Data Berhasil Diubah')->autoClose(1000);
          return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        Alert::success('success','data berhasil di hapus')->autoClose(1000);
        return redirect()->route('order.index');
    }
}
