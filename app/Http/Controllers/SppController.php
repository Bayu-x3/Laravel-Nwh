<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $spps = DB::table('spps')->get();
    return view("spp.index", compact('spps'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses validasi data
    
        $request->validate([
            'tahun' => 'required|min:3',
            'nominal' => 'required|min:3',
        ]);
    
        // proses insert data
    
        $query = DB::table('spps')->insert([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);
    
        return redirect()->route('spp.index')->with(['success' => 'Data telah ditambahkan']);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sppsShow = DB::table('spps')->where('id_spp', $id)->first();
    return view("spp.show", compact('sppsShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sppsEdit = DB::table('spps')->where('id_spp', $id)->first();
    return view("spp.edit", compact('sppsEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tahun' => 'required|min:3',
            'nominal' => 'required|min:3',
        ]);
    
        DB::table('spps')->where('id_spp', $id)->update([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);
    
        return redirect()->route('spp.index')->with(['Success' => 'Data berhasil di update']);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sppsHapus = DB::table('spps')->where('id_spp', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}
