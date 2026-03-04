<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $nevas = Pengaduan::all();
        return view('pengaduan.index', compact('nevas'));
    }

    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required|unique:pengaduans,kode',
            'pelapor' => 'required',
            'kelas' => 'required',
            'sarana' => 'required',
            'lokasi' => 'string|nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
            
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/fotos');
            $validatedData['foto'] = basename($fotoPath);
        }

        Pengaduan::create($validatedData);
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dibuat!');
    }
}


