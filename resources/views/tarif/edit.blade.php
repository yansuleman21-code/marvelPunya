<style>
    /* Mengatur kotak utama form agar responsif ke tengah */
    .wadah-form {
        max-width: 400px;
        width: 90%; /* Memastikan form menyesuaikan layar kecil */
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgb(0, 56, 240);
        font-family: Arial, sans-serif;
    }

    /* Mengatur judul form */
    .judul-form {
        text-align: center;
        color: #0752f3c9;
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
        border: 1px solid #0025f5;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 15px;
        transition: border-color 0.3s ease-in-out;
    }

    /* Warna garis pinggir saat kotak ketikan diklik */
    .grup-isian input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    /* Mengatur tombol Update */
    .tombol-update {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    /* Warna tombol saat kursor diarahkan (hover) */
    .tombol-update:hover {
        background-color: #0056b3;
    }
</style>

<div class="wadah-form">
    <h2 class="judul-form">Edit Tarif</h2>

    <form action="{{ route('tarif.update', $data->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="grup-isian">
            <input type="text" name="jenis_kendaraan" value="{{ $data->jenis_kendaraan }}" placeholder="Motor/Mobil" required>
        </div>
        
        <div class="grup-isian">
            <input type="number" name="harga" value="{{ $data->harga }}" placeholder="Harga" required>
        </div>

        <button type="submit" class="tombol-update">Update</button>
    </form>
</div>