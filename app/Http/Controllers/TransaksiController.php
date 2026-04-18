<?php
namespace App\Http\Controllers;
use App\Models\{Transaksi, Kendaraan, Tarif, AreaParkir};
use Illuminate\Http\Request;

class TransaksiController extends Controller {
    public function index() {
        $data = Transaksi::with(['kendaraan', 'tarif', 'areaParkir'])->get();
        return view('transaksi.index', compact('data'));
    }

    public function create() {
        $kendaraan = Kendaraan::all();
        $tarif = Tarif::all();
        $area = AreaParkir::all();
        return view('transaksi.create', compact('kendaraan', 'tarif', 'area'));
    }

    public function store(Request $request) {
        Transaksi::create([
            'kendaraan_id' => $request->kendaraan_id,
            'tarif_id' => $request->tarif_id,
            'area_parkir_id' => $request->area_parkir_id,
            'waktu_masuk' => now(),
            'user_id' => auth()->id()
        ]);
        return redirect()->route('transaksi.index')->with('success', 'Kendaraan masuk');
    }

    public function update(Request $request, $id) {
        $transaksi = Transaksi::findOrFail($id);
        $waktu_keluar = now();
        $durasi = ceil((strtotime($waktu_keluar) - strtotime($transaksi->waktu_masuk)) / 3600);
        $biaya = $durasi * $transaksi->tarif->tarif_per_jam;

        $transaksi->update([
            'waktu_keluar' => $waktu_keluar,
            'durasi' => $durasi,
            'biaya' => $biaya
        ]);
        return redirect()->route('transaksi.index')->with('success', 'Kendaraan keluar');
    }
}