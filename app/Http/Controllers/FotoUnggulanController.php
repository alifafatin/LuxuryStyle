<?php

namespace App\Http\Controllers;

use App\Models\FotoUnggulan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FotoUnggulanController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fotounggulan' => '',
            'namabaju' =>'required|string',
            'hargabajusebelum' => '',
            'hargabajusesudah' => '',
            'deskripsi' => ''
        ]);

        if ($request->hasFile('fotounggulan')) {
            $fotounggulan = $request->file('fotounggulan')->store('foto-unggulan', 'public');

            FotoUnggulan::create([
                'fotounggulan' => $fotounggulan,
                'namabaju' => $request->input('namabaju'),
                'hargabajusebelum' => $request->input('hargabajusebelum'),
                'hargabajusesudah' => $request->input('hargabajusesudah'),
                'deskripsi' => $request->input('deskripsi'),
            ]);
        } else {
            return back()->withErrors('error', 'Masukkan foto terlebih dahulu');
        }
        return redirect()->route('unggulan.store')->with('success', 'Berhasil Menambahkan data foto');
    }


    public function index() {
        return view('admin.unggulan', [
            'fotounggulans' => FotoUnggulan::all()
        ]);
    }

    public function destroy($id)
    {
        // dd($id);

        $hapus = FotoUnggulan::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if (Storage::disk('public')->exists($hapus->fotounggulan)) {
            Storage::disk('public')->delete($hapus->fotounggulan);
        }

        // Hapus data dari basis data
        $hapus->delete();

        return back();
    }

}
