<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Order;
use Alert;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        $transaksi = Transaksi::all();
        confirmDelete('Hapus?','Anda Yakin Ingin Menghapusnya?');
        return view('admin.transaksi.index', compact('transaksi','order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $order = Order::all();
        return view('admin.transaksi.create', compact('transaksi','order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'required',
            'transaksi_method' => 'required',
            'transaksi_status' => 'required',

        ]);
         $transaksi = new Transaksi();
         $transaksi->order_id =$request->order_id;
         $transaksi->transaksi_method = $request->transaksi_method;
         $transaksi->transaksi_status = $request->transaksi_status;
         $transaksi->save();

         Alert::success('success', 'Data Berhasil Dtambahkan')->autoClose(1000);
         return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $id)
    {
        $order = Order::findOrFail($id);
        $transaksi = Transaksi::all();
        return view('admin.transaksi.edit', compact('transaksi','order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'order_id' => 'required',
            'transaksi_method' => 'required',
            'transaksi_status' => 'required',

          ]);
          $transaksi = Transaksi::findOrFail($id);
          $transaksi->order_id =$request->order_id;
          $transaksi->transaksi_method = $request->transaksi_method;
          $transaksi->transaksi_status = $request->transaksi_status;
          $transaksi->save();

          Alert::success('success', 'Data Berhasil Diubah')->autoClose(1000);
          return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        Alert::success('success','data berhasil di hapus')->autoClose(1000);
        return redirect()->route('transaksi.index');
    }
}
