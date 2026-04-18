<h2>Tambah Tarif</h2>

<form action="{{ route('tarif.store') }}" method="POST">
    @csrf

    <input type="text" name="jenis_kendaraan" placeholder="Motor/Mobil"><br><br>
    <input type="number" name="harga" placeholder="Harga"><br><br>

    <button type="submit">Simpan</button>
</form>