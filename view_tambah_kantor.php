<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Kantor</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container p-3">
        <div class="card text-left">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_karyawan.php">Lihat Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_kantor.php">Lihat Kantor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_lokasi_karyawan.php">Lihat Lokasi Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tambah_karyawan.php">Tambah Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_tambah_kantor.php">Tambah Kantor</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="text-center">Tambahkan Kantor</h1>
                <form method="POST" action="controller_kantor.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputNamaKantor">Nama</label>
                            <input type="text" class="form-control" name="inputNamaKantor" placeholder="Pt. Jovian Good 5">
                        </div>
                        <div class="form-group">
                            <label for="inputAlamat">Alamat</label>
                            <input type="text" class="form-control" name="inputAlamat" placeholder="Jl. Imo No. 200">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputKota">Kota</label>
                        <input type="text" class="form-control" name="inputKota" placeholder="Makassar/Ujung Pandang">
                    </div>
                    <div class="form-group">
                        <label for="inputTelepon">Telepon</label>
                        <input type="text" class="form-control" name="inputTelepon" placeholder="08123456789">
                    </div>
                    <button name="tombol_tambah" type="submit" class="btn btn-primary d-block mx-auto mt-2">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</body>
>

</html>