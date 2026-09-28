<?php
require_once 'model_karyawan.php';
require_once 'model_kantor.php';
require_once 'model_lokasi_karyawan.php';
require_once 'controller_karyawan.php';
require_once 'controller_kantor.php';
require_once 'controller_lokasi_karyawan.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-4" style="max-width: 480px;">
        <div class="card border border-dark rounded-0 bg-white shadow-sm">
            <div class="p-2 border-bottom border-dark text-start fw-bold" style="background-color: #cbeafb; font-size: 14px;">
                <a href="view_karyawan.php" class="text-decoration-none text-dark">Karyawan</a>
                <span class="mx-1">|</span>
                <a href="view_kantor.php" class="text-decoration-none text-dark">Kantor</a>
                <span class="mx-1">|</span>
                <a href="view_lokasi_karyawan.php" class="text-decoration-none text-dark fw-bold">Kantor-Karyawan</a>
            </div>
            <div class="card-body p-4 text-center">
                <h1 class="mb-4" style="color: #333e8d; font-weight: 600; font-size: 35px;">Karyawan Kantor</h1>
                <table class="table table-bordered border-secondary mx-auto mb-4" style="width: 90%;">
                    <thead>
                        <tr style="background-color: #9be0fc;">
                            <th scope="col" style="background-color: #9be0fc; color: #000; border-color: #6c757d;">Karyawan</th>
                            <th scope="col" style="background-color: #9be0fc; color: #000; border-color: #6c757d;">Kantor</th>
                            <th scope="col" style="background-color: #9be0fc; color: #000; border-color: #6c757d;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $semuaLokasi = tampilkanLokasiKaryawan();
                        if (empty($semuaLokasi)) {
                        ?>
                            <tr>
                                <td colspan="3" class="text-muted py-3">Belum ada data lokasi karyawan.</td>
                            </tr>
                            <?php
                        } else {
                            foreach ($semuaLokasi as $index => $lokasi) {
                            ?>
                                <tr>
                                    <td class="text-start ps-3"><?= $lokasi->NamaKaryawan ?></td>
                                    <td class="text-start ps-3"><?= $lokasi->NamaKantor ?></td>
                                    <td class="align-middle">
                                        <a href="controller_lokasi_karyawan.php?hapusIndexLokasi=<?= $index ?>">
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <form action="controller_lokasi_karyawan.php" method="POST" class="mt-4 mx-auto" style="max-width: 320px;">
                    <div class="mb-3 row align-items-center">
                        <label class="col-4 col-form-label text-start fw-semibold pe-0">Karyawan</label>
                        <div class="col-8">
                            <select name="inputNamaKaryawan" class="form-select border-secondary" required>
                                <option value="" disabled selected>-- Pilih Karyawan --</option>
                                <?php
                                $semuaKaryawan = tampilkanKaryawan();
                                foreach ($semuaKaryawan as $karyawan) {
                                ?>
                                    <option value="<?= $karyawan->Nama ?>"><?= $karyawan->Nama ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label class="col-4 col-form-label text-start fw-semibold pe-0">Kantor</label>
                        <div class="col-8">
                            <select name="inputNamaKantor" class="form-select border-secondary" required>
                                <option value="" disabled selected>-- Pilih Kantor --</option>
                                <?php
                                $semuaKantor = tampilkanKantor();
                                foreach ($semuaKantor as $kantor) {
                                ?>
                                    <option value="<?= $kantor->NamaKantor ?>"><?= $kantor->NamaKantor ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" name="tombol_tambah_lokasi" class="btn px-4 py-1 border border-secondary shadow-sm fw-bold" style="background-color: #80daf8; color: #000; border-radius: 6px;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>