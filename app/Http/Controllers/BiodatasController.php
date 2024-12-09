<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB; //tambahin ini kl gapake model

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodatasController extends Controller
{
    // Menampilkan semua data biodata
    public function index()
    {
        $biodatas = Biodata::all();
        return view('biodatas.index', compact('biodatas'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('biodatas.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
        ]);

        Biodata::create($request->all());
        return redirect()->route('biodatas.index');
    }

    // Menampilkan form untuk mengedit data yang ada
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodatas.edit', compact('biodata'));
    }

    // Memperbarui data yang ada di database
    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        $biodata->update($request->all());
        return redirect()->route('biodatas.index');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('biodatas.index');
    }
}