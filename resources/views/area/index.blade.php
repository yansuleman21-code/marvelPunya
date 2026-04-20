<style>
    /* Wadah utama halaman */
    .container {
        max-width: 900px;
        margin: 40px auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
    }

    /* Gaya untuk tombol umum */
    .btn {
        display: inline-block;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Variasi warna tombol */
    .btn-tambah { background-color: #28a745; color: white; margin-bottom: 20px; }
    .btn-tambah:hover { background-color: #218838; }
    
    .btn-edit { background-color: #ffc107; color: #212529; }
    .btn-edit:hover { background-color: #e0a800; }
    
    .btn-hapus { background-color: #dc3545; color: white; }
    .btn-hapus:hover { background-color: #c82333; }

    /* Pesan Sukses (Alert) */
    .alert-sukses {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    /* Gaya Tabel */
    .tabel-data {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        background-color: #fff;
    }
    .tabel-data th, .tabel-data td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .tabel-data th {
        background-color: #007bff;
        color: white;
    }
    .tabel-data tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .tabel-data tr:hover {
        background-color: #f1f1f1;
    }
</style>

<div class="container">
    <h2>Daftar Area Parkir</h2>

    <a href="{{ route('area-parkir.create') }}" class="btn btn-tambah">+ Tambah Area</a>

    @if(session('success'))
        <div class="alert-sukses">
            {{ session('success') }}
        </div>
    @endif

    <table class="tabel-data">
        <thead>
            <tr>
                <th width="50px">No</th>
                <th>Nama Area</th>
                <th>Kapasitas</th>
                <th>Lokasi</th>
                <th width="160px" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_area }}</td>
                <td>{{ $item->kapasitas }} Kendaraan</td>
                <td>{{ $item->lokasi }}</td>
                <td style="text-align: center;">
                    <a href="{{ route('area-parkir.edit', $item->id) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('area-parkir.destroy', $item->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus area ini?');">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-hapus">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>