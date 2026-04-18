<a href="{{ route('area.create') }}">Tambah Area</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Area</th>
        <th>Kapasitas</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_area }}</td>
        <td>{{ $item->kapasitas }}</td>
        <td>{{ $item->lokasi }}</td>
        <td>
            <a href="{{ route('area.edit', $item->id) }}">Edit</a>

            <form action="{{ route('area.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('delete')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>