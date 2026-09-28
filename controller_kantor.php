<?php
require_once 'model_kantor.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['Kantor'])) {
    $_SESSION['Kantor'] = [];
}

function tambahKantor()
{
    $kantor = new Kantor();
    $kantor->NamaKantor = $_POST['inputNamaKantor'];
    $kantor->AlamatKantor = $_POST['inputAlamat'];
    $kantor->KotaKantor = $_POST['inputKota'];
    $kantor->TeleponKantor = $_POST['inputTelepon'];
    array_push($_SESSION['Kantor'], $kantor);
}

function tampilkanKantor()
{
    return $_SESSION['Kantor'];
}

function hapusKantor(int $IndexKantor)
{
    unset($_SESSION['Kantor'][$IndexKantor]);
}

if (isset($_POST['tombol_tambah'])) {
    tambahKantor();
    header('Location: view_kantor.php');
    exit();
}

if (isset($_GET['hapusIndex'])) {
    hapusKantor($_GET['hapusIndex']);
    header('Location: view_kantor.php');
    exit();
}
