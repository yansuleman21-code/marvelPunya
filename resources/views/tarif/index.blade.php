<a href="{{ route('tarif.create') }}">Tambah Tarif</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>No</th>
        <th>Jenis Kendaraan</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach ($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->jenis_kendaraan }}</td>
        <td>{{ $item->harga }}</td>
        <td>
            <a href="{{ route('tarif.edit', $item->id) }}">Edit</a>

            <form action="{{ route('tarif.destroy', $item->id) }}" method="POST" style="display:inline">
                @csrf
                @method('delete')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>