<?php
require_once 'model_lokasi_karyawan.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['LokasiKaryawan'])) {
    $_SESSION['LokasiKaryawan'] = [];
}

function tambahLokasiKaryawan()
{
    $lokasi = new LokasiKaryawan();
    $lokasi->NamaKaryawan = $_POST['inputNamaKaryawan'];
    $lokasi->NamaKantor   = $_POST['inputNamaKantor'];

    array_push($_SESSION['LokasiKaryawan'], $lokasi);
}

function tampilkanLokasiKaryawan()
{
    return $_SESSION['LokasiKaryawan'];
}

function hapusLokasiKaryawan(int $index)
{
    unset($_SESSION['LokasiKaryawan'][$index]);
}

// Form Handlers
if (isset($_POST['tombol_tambah_lokasi'])) {
    tambahLokasiKaryawan();
    header('Location: view_lokasi_karyawan.php');
    exit();
}

if (isset($_GET['hapusIndexLokasi'])) {
    hapusLokasiKaryawan($_GET['hapusIndexLokasi']);
    header('Location: view_lokasi_karyawan.php');
    exit();
}
