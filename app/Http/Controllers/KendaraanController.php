<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = Kendaraan::all();
        return view('kendaraan.index', compact('data'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }
    public function store(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $data = Kendaraan::findOrFail ($id);
        return view('kendaraan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Kendaraan::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data berhasil di update');
    }
    public function destroy($id)
    {
        Kendaraan::destroy($id);
        return redirect()->route('kendaraan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}