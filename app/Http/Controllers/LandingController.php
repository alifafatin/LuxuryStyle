<?php

namespace App\Http\Controllers;

use App\Models\FotoProduk;
use Illuminate\Http\Request;
use App\Models\FotoUnggulan;
use App\Models\FotoTentang;

class LandingController extends Controller
{
    public function index() {
        $tentangs = FotoTentang::all();
        $product = FotoProduk::all();
        $fotounggulans = FotoUnggulan::all();
        // dd($tentangs);x`
        return view('landing.index', [
            'tentangs' => $tentangs,
            'product' => $product,
            'fotounggulans' => $fotounggulans,
        ]);
    }
}
