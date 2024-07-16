<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $kelas = Kelas::all();
    return view('kelas.index', compact('kelas'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
    Kelas::create($request->all());
    return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }
    
    public function show(Kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->all());
        return redirect()->route('kelas.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
{
    $kelas->delete();
    return redirect()->route('kelas.index')->with('success', 'Berhasil menghapus data kelas');
}   
}
