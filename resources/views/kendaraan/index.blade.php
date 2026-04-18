      <!-- @extends('layouts.app')

@section('content')

 <h2>Data Kendaraan</h2>

<a href="{{ route('kendaraan.create') }}">Tambah</a>

 @endsection
 -->

 <h2>Data Kendaraan</h2>

      <a href="{{ route('kendaraan.create') }}">Tambah</a>

      @if(session('success'))
            <p>{{ session('success') }}</p>
      @endif

      <table border="1">
            <tr>
                  <th>No</th>
                  <th>No</th>
                  <th>Jenis</th>
                  <th>Warna</th>
                  <th>Aksi</th>
            </tr>

            @foreach($data as $item)
            <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->no_polisi }}</td>
                  <td>{{ $item->jenis }}</td>
                  <td>{{ $item->warna }}</td>
                  <td>
                        <a href="{{ route('kendaraan.edit', $item->id) }}">Edit</a>

                        <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST" style="display:inline">
                              @csrf
                              @method('delete')

                              <button type="submit">Hapus</button>
                        </form>
                  </td>
            </tr>
            @endforeach
      </table>