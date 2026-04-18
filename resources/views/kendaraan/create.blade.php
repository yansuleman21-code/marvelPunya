<h2>Tambah Kendaraan</h2>

<form method="POST" action="{{ route('kendaraan.store') }}">
    @csrf

    <label>No Polisi</label><br>
    <input type="text" name="no_polisi"><br><br>
    <label>Jenis</label><br>
    <select name="jenis">
        <option value="motor">Motor</option>
        <option value="mobil">Mobil</option>
    </select><br><br>

    <label>Warna</label><br>
    <input type="text" name="warna"><br><br>

    <button type="submit">Simpan</button>
</form>