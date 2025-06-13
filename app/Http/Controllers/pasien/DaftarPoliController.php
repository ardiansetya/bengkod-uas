<?php

namespace App\Http\Controllers\pasien;

use App\Http\Controllers\Controller;
use App\Models\JadwalPeriksa;
use App\Models\Poli;
use Illuminate\Http\Request;

class DaftarPoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jadwalPeriksa = JadwalPeriksa::all();
        $polis = Poli::all();

        return view('pasien.daftar-poli.index', compact('jadwalPeriksa'), compact('polis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $jadwalPeriksa = JadwalPeriksa::findOrFail($id);
        return view('pasien.daftar-poli.create', compact('jadwalPeriksa'));
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
