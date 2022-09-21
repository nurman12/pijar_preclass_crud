<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return view('product.index', compact('data'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga'  => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required'
        ]);

        $product = new Product();
        $product->nama_produk = $request->nama;
        $product->keterangan = $request->keterangan;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->save();

        return redirect('/products')->with(['success' => 'Berhasil simpan data']);
    }
    public function edit($id)
    {
        $data = Product::where('id', $id)->first();

        return view('product.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga'  => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required'
        ]);

        Product::where('id', $id)->update([
            'nama_produk' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/products')->with(['success' => 'Berhasil ubah data']);
    }
    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return redirect('/products')->with(['success' => 'Berhasil hapus data']);
    }
}
