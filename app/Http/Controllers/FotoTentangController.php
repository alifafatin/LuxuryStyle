<?php

namespace App\Http\Controllers;

use App\Models\FotoTentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoTentangController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fototentang' => '',
        ]);

        if ($request->hasFile('fototentang')) {
            $validated['fototentang'] = $request->file('fototentang')->store('foto-tentang', 'public');
            FotoTentang::create($validated);
        } else {
            return back()->withErrors('error', 'Masukkan foto terlebih dahulu');
        }
        return redirect()->route('tentang.store')->with('success', 'Berhasil Menambahkan data foto');
    }

    public function index() {
        return view('admin.tentang', [
            'fototentangs' => FotoTentang::all()
        ]);
    }


    public function destroy($id )
    {
    //    dd($id);
    $hapus = FotoTentang::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if (Storage::disk('public')->exists($hapus->fototentang)) {
            Storage::disk('public')->delete($hapus->fototentang);
        }

        // Hapus data dari basis data
        $hapus->delete();

        return back();

    }

    public function tentang() {
        return view('landing.index', [
            'about' => FotoTentang::all()
        ]);
    }
}
