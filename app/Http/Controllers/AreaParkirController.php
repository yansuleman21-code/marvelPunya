<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use Illuminate\Http\Request;

class AreaParkirController extends Controller
{
    public function index()
    {
        $data = AreaParkir::all();
        return view('area.index', compact('data'));
    }

    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        AreaParkir::create($request->all());

        return redirect()->route('area-parkir.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = AreaParkir::findOrFail($id);
        return view('area.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = AreaParkir::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('area-parkir.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = AreaParkir::findOrFail($id);
        $data->delete();

        return redirect()->route('area-parkir.index')
            ->with('success', 'Data berhasil dihapus');
    }
}