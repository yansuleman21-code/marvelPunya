<h2>Tambah Area Parkir</h2>

<form action="{{ route('area.store') }}" method="POST">
    @csrf

    <input type="text" name="nama_area" placeholder="Nama Area"><br><br>
    <input type="number" name="kapasitas" placeholder="Kapasitas"><br><br>
    <input type="text" name="lokasi" placeholder="Lokasi"><br><br>

    <button type="submit">Simpan</button>
</form>