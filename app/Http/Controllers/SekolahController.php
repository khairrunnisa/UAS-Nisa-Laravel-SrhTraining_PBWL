<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Sekolah::all();
        return view('sekolah.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sekolah::create([
            'sekolah_nama' => $request->sekolah_nama,
            'sekolah_alamat' => $request->sekolah_alamat,
        ]);

        return redirect('sekolah');
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
        $row = Sekolah::findOrFail($id);
        return view('sekolah.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Sekolah::findOrFail($id);
        $row->update([
            'sekolah_nama' => $request->sekolah_nama,
            'sekolah_alamat' => $request->sekolah_alamat,
        ]);

        return redirect('sekolah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Sekolah::findOrFail($id);
        $row->delete();

        return redirect('sekolah');
    }
}
