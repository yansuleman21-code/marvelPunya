<h2>Edit Kendaraan</h2>

<form method="POST" action="{{ route('kendaraan.update', $data->id) }}">
    @csrf
    @method('PUT')

    <label>No Polisi</label><br>
    <input type="text" name="no_polisi" value="{{ $data->no_polisi }}"><br><br>

    <label>Jenis</label><br>
    <select name="jenis">
        <option value="motor" {{ $data->jenis == 'motor' ? 'selected' : ''}}>Motor</option>
        <option value="mobil" {{ $data->jenis == 'mobil' ? 'selected' : ''}}>Mobil</option>
    </select><br><br>

    <label>Warna</label>
    <input type="text" name="warna" value="{{ $data->warna }}"><br><br>

    <button type="submit">Update</button>
</form>