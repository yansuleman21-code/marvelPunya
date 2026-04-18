<h2>Edit Tarif</h2>

<form action="{{ route('tarif.update', $data->id) }}" method="POST">
    @csrf
    @method('put')

    <input type="text" name="jenis_kendaraan" value="{{ $data->jenis_kendaraan }}"><br><br>
    <input type="number" name="harga" value="{{ $data->harga }}"><br><br>

    <button type="submit">Update</button>
</form>