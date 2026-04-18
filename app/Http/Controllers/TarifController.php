<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tarif::all();
        return view('tarif.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tarif::create($request->all());

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil ditambahkan');
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
        $data = Tarif::findOrFail($id);
        return view('tarif.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $data = Tarif::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Tarif::findOrFail($id);
        $data->delete();

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil dihapus');
    }
    protected $fillable = [
    'jenis_kendaraan',
    'harga'
];
}
