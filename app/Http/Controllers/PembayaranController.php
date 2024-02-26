<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Petugas;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        $siswa = Siswa::all();
        $petugas = Petugas::all();
        $kelas = Kelas::all();
        $spps = Spp::all();
        return view('pembayaran.index', compact('pembayaran', 'petugas', 'kelas', 'spps', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $petugas = Petugas::all();
        $kelas = Kelas::all();
        $spps = Spp::all();
        return view('pembayaran.create', compact('petugas', 'kelas', 'spps', 'siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePembayaranRequest $request, Pembayaran $pembayaran)
    {
        $pembayaran->create($request->all());
        return redirect()->route('pembayaran.index');
    }

    public function show(Pembayaran $pembayaran)
    {
        return view('pembayaran.show', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $siswa = Siswa::all();
        $petugas = Petugas::all();
        $spps = Spp::all();
        return view('pembayaran.edit', compact('pembayaran', 'petugas', 'spps', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembayaranRequest $request, Pembayaran $pembayaran)
    {
        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
