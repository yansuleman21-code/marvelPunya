<style>
    /* Mengatur kotak utama form */
    .wadah-form {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgb(9, 66, 255);
        font-family: Arial, sans-serif;
    }

    /* Mengatur judul form */
    .judul-form {
        text-align: center;
        color: #1182ec;
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
        border: 1px solid #2256c5;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 15px;
        transition: border-color 0.3s;
    }

    /* Warna garis pinggir saat kotak ketikan diklik */
    .grup-isian input:focus {
        border-color: #007bff;
        outline: none;
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
        transition: background-color 0.3s;
    }

    /* Warna tombol saat kursor diarahkan (hover) */
    .tombol-update:hover {
        background-color: #0056b3;
    }
</style>

<div class="wadah-form">
    <h2 class="judul-form">Edit Area Parkir</h2>

    <form action="{{ route('area-parkir.update', $data->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="grup-isian">
            <input type="text" name="nama_area" value="{{ $data->nama_area }}" placeholder="Nama Area" required>
        </div>
        
        <div class="grup-isian">
            <input type="number" name="kapasitas" value="{{ $data->kapasitas }}" placeholder="Kapasitas" required>
        </div>

        <div class="grup-isian">
            <input type="text" name="lokasi" value="{{ $data->lokasi }}" placeholder="Lokasi" required>
        </div>

        <button type="submit" class="tombol-update">Update</button>
    </form>
</div>