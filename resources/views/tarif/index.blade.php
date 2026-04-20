<style>
    /* Wadah utama halaman */
    .container {
        max-width: 800px;
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
    .tabel-tarif {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        background-color: #fff;
    }
    .tabel-tarif th, .tabel-tarif td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .tabel-tarif th {
        background-color: #007bff;
        color: white;
    }
    .tabel-tarif tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .tabel-tarif tr:hover {
        background-color: #f1f1f1;
    }
</style>

<div class="container">
    <h2>Daftar Tarif</h2>

    <a href="{{ route('tarif.create') }}" class="btn btn-tambah">+ Tambah Tarif</a>

    @if(session('success'))
        <div class="alert-sukses">
            {{ session('success') }}
        </div>
    @endif

    <table class="tabel-tarif">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kendaraan</th>
                <th>Harga</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->jenis_kendaraan }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('tarif.edit', $item->id) }}" class="btn btn-edit">Edit</a>

                    <form action="{{ route('tarif.destroy', $item->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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