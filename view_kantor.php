<?php
require 'controller_kantor.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
                        <a class="nav-link active" href="view_kantor.php">Lihat Kantor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="view_lokasi_karyawan.php">Lihat Lokasi Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tambah_karyawan.php">Tambah Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tambah_kantor.php">Tambah Kantor</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="text-center">Kantor</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-dark">
                        <?php
                        $counter = 0;
                        $SemuaKantor = tampilkanKantor();
                        if (empty($SemuaKantor)) {
                        ?>
                            <tr class="text-center">
                                <td colspan="6">Belum ada data kantor.</td>
                            </tr>
                            <?php
                        } else {
                            foreach ($SemuaKantor as $index => $kantor) {
                                $counter++;
                            ?>
                                <tr>
                                    <th scope="row"><?= $counter ?></th>
                                    <td><?= $kantor->NamaKantor ?></td>
                                    <td><?= $kantor->AlamatKantor ?></td>
                                    <td><?= $kantor->KotaKantor ?></td>
                                    <td><?= $kantor->TeleponKantor ?></td>
                                    <td>
                                        <a href="controller_kantor.php?hapusIndex=<?= $index ?>">
                                            <button class="btn btn-primary">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                        <tr>
                            <td colspan="6" class="text-center">
                                <a href="view_tambah_kantor.php">
                                    <button class="btn btn-primary">Tambahkan Kantor</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>>

</html>