<?php

namespace App\Http\Controllers;

use App\Models\FotoProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoProdukController extends Controller
{
        public function store(Request $request)
    {
        $validated = $request->validate([
            'fotoproduk' => '',
            'namabaju' =>'',
            'hargabaju' =>'',
        ]);

        if ($request->hasFile('fotoproduk')) {
            $fotoproduk = $request->file('fotoproduk')->store('foto-produk', 'public');
            $namabaju = $request->input('namabaju');
            $hargabaju = $request->input('hargabaju');

            FotoProduk::create(['fotoproduk' => $fotoproduk, 'namabaju' => $namabaju, 'hargabaju' => $hargabaju]);
        } else {
            return back()->withErrors('error', 'Masukkan foto terlebih dahulu');
        }
        return redirect()->route('produk.store')->with('success', 'Berhasil Menambahkan data foto');
    }


     public function index() {
         return view('admin.produk', [
             'fotoproduks' => FotoProduk::all()
         ]);
     }

     public function destroy($id)
     {
        // dd($id);

        $hapus = FotoProduk::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if (Storage::disk('public')->exists($hapus->fotoproduk)) {
            Storage::disk('public')->delete($hapus->fotoproduk);
        }

        // Hapus data dari basis data
        $hapus->delete();

        return back();

     }


}
