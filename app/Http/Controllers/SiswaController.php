<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        $spps = Spp::all();
        $kelases = Kelas::all();
        return view('siswa.index', compact('siswa', 'spps', 'kelases'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $spps = Spp::all();
        $kelases = Kelas::all();
        return view('siswa.create', compact('siswa', 'spps', 'kelases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request)
{
    Siswa::create($request->all());
    return redirect()->route('siswa.index')->with('success', 'Berhasil menambahkan data siswa');
}


    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $spps = Spp::all();
        $kelases = Kelas::all();
        return view('siswa.edit', compact('siswa', 'spps', 'kelases'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, string $id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->update($request->all());
    return redirect()->route('siswa.index')->with('success', 'Berhasil mengupdate data siswa');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
{
    // Hapus siswa yang terkait
    $kelas->siswas()->delete();

    // Hapus kelas
    $kelas->delete();

    return redirect()->route('kelas.index')->with('success', 'Berhasil menghapus data kelas dan siswa terkait.');
}

}
