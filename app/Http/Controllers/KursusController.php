<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kursus::with('sekolah')->get();
        return view('kursus.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getSekolah = Sekolah::all();
        return view('kursus.create', compact('getSekolah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kursus::create([
            'kursus_nama' => $request->kursus_nama,
            'kursus_kategori' => $request->kursus_kategori,
            'kursus_id_sekolah' => $request->kursus_id_sekolah,
        ]);

        return redirect('kursus');
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
        $row = Kursus::findOrFail($id);
        $getSekolah = Sekolah::all();
        return view('kursus.edit', compact('row', 'getSekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Kursus::findOrFail($id);
        $row->update([
            'kursus_nama' => $request->kursus_nama,
            'kursus_kategori' => $request->kursus_kategori,
            'kursus_id_sekolah' => $request->kursus_id_sekolah,
        ]);
        return redirect('kursus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kursus::findOrFail($id);
        $row->delete();

        return redirect('kursus');
    }
}
