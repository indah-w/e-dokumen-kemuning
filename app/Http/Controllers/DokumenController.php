<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index() {
        $dokumen = Dokumen::all();
        return view('dokumen.index', compact('dokumen'));
    }

    public function create() {
        return view('dokumen.create');
    }

    public function store(Request $request) {
        $dokumen = Dokumen::create($request->except('file'));
        if ($request->hasFile('file')) {
            // Mengambil file yang diupload
            $uploaded_file = $request->file('file');
            // mengambil extension file
            $extension = $uploaded_file->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_file->move($destinationPath, $filename);
            // mengisi field cover di book dengan filename yang baru dibuat
            $dokumen->file = $filename;
            $dokumen->save();
        }
        return redirect()->route('dokumen.index')->with('status', 'Dokumen Stored!!!')->with('success', true);
    }

    public function edit(Dokumen $dokumen, $id) {
        $dokumen = Dokumen::find($id);
        return view('dokumen.edit', compact('dokumen'));
    }

    public function download($id){
        $dokumen = Dokumen::find($id);
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $filePath = $destinationPath . '/' . $dokumen->file;
        return response()->download($filePath);
    }

    public function update(Request $request, $id) {
        $dokumen = Dokumen::find($id);
        $dokumen->update($request->except('file'));
        if ($request->hasFile('file')) {
            // Mengambil file yang diupload
            $uploaded_file = $request->file('file');
            // mengambil extension file
            $extension = $uploaded_file->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_file->move($destinationPath, $filename);
            // mengisi field cover di book dengan filename yang baru dibuat
            $dokumen->file = $filename;
            $dokumen->update();
        }
        return redirect()->route('dokumen.index')->with('status', 'Dokumen updated!!!')->with('success', true);
    }

    public function destroy($id) {
        $dokumen = Dokumen::find($id);
        $dokumen->delete();
        return redirect()->route('dokumen.index')->with('status', 'Dokumen deleted!!!')->with('success', true);
    }

}
