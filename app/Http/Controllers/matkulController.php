<?php

namespace App\Http\Controllers;

use App\matkul;
use Illuminate\Http\Request;

class matkulController extends Controller
{
    public function index() {
        $matkul = matkul::all();
        return view('matkul.index', compact('matkul')); 
    }

    public function create() {
        return view('matkul.create');
    }

    public function store(Request $request) {
        matkul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('matkul');
    }
    
    public function edit($id)
    {
        $matkul = matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id) {
        $matkul = matkul::find($id);
        $matkul->update($request->all());
        alert()->success('Sukses','Data Berhasil Diedit');
        return redirect()->route('matkul');
    }

    public function destroy($id) {
        $matkul = matkul::find($id);
        $matkul->delete();
        alert()->success('Sukses','Data Berhasil Dihapus');
        return redirect()->route('matkul');
    }
}
