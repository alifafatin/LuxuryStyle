<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index() {
        return view('admin.form', [
            'forms' => Form::all()
        ]);
    }

    public function store(Request $request)
    {
        $form = new Form();
        $form->nama = $request->nama;
        $form->email = $request->email;
        $form->pesan = $request->pesan;
        $form->save();
        return redirect()->route('landing.index');


    }

    public function destroy($id)
    {
        Form::findOrFail($id)->delete();
        return redirect()->route('form.index');
    }
}
