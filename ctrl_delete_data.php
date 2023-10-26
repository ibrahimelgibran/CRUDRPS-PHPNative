<?php
include('config.php');

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $query = "DELETE FROM tb_dosen WHERE nik_dos = $nik";

    if (mysqli_query($koneksi, $query)) {
        header('location:./view_data.php?=berhasil');
    } else {
        echo "Gagal menghapus" . mysqli_error($koneksi);
    }
}