<?php
require_once 'model_karyawan.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['Karyawan'])) {
    $_SESSION['Karyawan'] = [];
}

function tambahKaryawan()
{
    $karyawan = new Karyawan();
    $karyawan->Nama = $_POST['inputNama'];
    $karyawan->Jabatan = $_POST['inputJabatan'];
    $karyawan->Umur = $_POST['inputUmur'];
    array_push($_SESSION['Karyawan'], $karyawan);
}


function tampilkanKaryawan()
{
    return $_SESSION['Karyawan'];
}

function hapusKaryawan(int $IndexKaryawan)
{
    unset($_SESSION['Karyawan'][$IndexKaryawan]);
}

if (isset($_POST['tombol_tambah'])) {
    tambahKaryawan();
    header('Location: view_karyawan.php');
    exit();
}

if (isset($_GET['hapusIndex'])) {
    hapusKaryawan($_GET['hapusIndex']);
    header('Location: view_karyawan.php');
    exit();
}
