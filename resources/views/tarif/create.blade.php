<style>
    /* Mengatur kotak utama form */
    .wadah-form {
        max-width: 400px;
        margin: 50px auto; /* Membuat posisi ke tengah halaman */
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px; /* Membuat sudut membulat */
        box-shadow: 0 4px 15px rgba(3, 20, 255, 0.85); /* Efek bayangan */
        font-family: Arial, sans-serif;
    }

    /* Mengatur judul form */
    .judul-form {
        text-align: center;
        color: #335ac4;
        margin-bottom: 25px;
        margin-top: 0;
    }

    /* Mengatur jarak antar isian */
    .grup-isian {
        margin-bottom: 20px;
    }

    /* Mengatur kotak ketikan (input) */
    .grup-isian input {
        width: 100%;
        padding: 12px;
        border: 1px solid #007bbf;
        border-radius: 6px;
        box-sizing: border-box; /* Mencegah input keluar dari batas wadah */
        font-size: 15px;
        transition: border-color 0.3s;
    }

    /* Warna garis pinggir saat kotak ketikan diklik */
    .grup-isian input:focus {
        border-color: #007bff; /* Warna biru */
        outline: none;
    }

    /* Mengatur tombol Simpan */
    .tombol-simpan {
        width: 100%;
        padding: 12px;
        background-color: #007bff; /* Warna biru */
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Warna tombol saat kursor diarahkan (hover) */
    .tombol-simpan:hover {
        background-color: #0056b3; /* Warna biru lebih gelap */
    }
</style>

<div class="wadah-form">
    <h2 class="judul-form">Tambah Tarif</h2>

    <form action="{{ route('tarif.store') }}" method="POST">
        @csrf

        <div class="grup-isian">
            <input type="text" name="jenis_kendaraan" placeholder="Motor/Mobil" required>
        </div>
        
        <div class="grup-isian">
            <input type="number" name="harga" placeholder="Harga" required>
        </div>

        <button type="submit" class="tombol-simpan">Simpan</button>
    </form>
</div>