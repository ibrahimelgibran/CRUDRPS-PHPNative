<?php

require_once 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// cek tombol daftar
if(isset($_POST['daftar'])){
    // ambil data dari form
    $nik = $_POST['nik'];
    $nm = $_POST['nama_dosen'];
    $alt = $_POST['alamat_dosen'];
    $jk = $_POST['jenis_kelamin'];

    // buat query
    $sql = "INSERT INTO tb_dosen (nik_dos, nm_dos, almt_dos, jkl_dos) VALUES ('$nik', '$nm', '$alt', '$jk')";
    $query = mysqli_query($koneksi, $sql);

    // query simpan sudah berhasil
    if($query){
        header("Location: ./form_add.php?app=berhasil");
    } else {
        header("Location: ./form_add.php?app=Gagal");
    }
}else {
    die("Akses dilarang...");
}


?>