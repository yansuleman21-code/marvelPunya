<h2>Edit Area Parkir</h2>

<form action="{{ route('area.update', $data->id) }}" method="POST">
    @csrf
    @method('put')

    <input type="text" name="nama_area" value="{{ $data->nama_area }}"><br><br>
    <input type="number" name="kapasitas" value="{{ $data->kapasitas }}"><br><br>
    <input type="text" name="lokasi" value="{{ $data->lokasi }}"><br><br>

    <button type="submit">Update</button>
</form>