<?php
include('config.php');

// cek tombol simpan
if(isset($_POST['edit'])){

    // ambil data dari form
    $nik = $_POST['nik'];
    $nm = $_POST['nama_dosen'];
    $alt = $_POST['alamat_dosen'];
    $jk = $_POST['jenis_kelamin'];

    // buat query update
    $sql = "UPDATE tb_dosen SET nik_dos='$nik', nm_dos='$nm', almt_dos='$alt', jkl_dos='$jk' WHERE nik_dos='$nik'";
    $query = mysqli_query($koneksi, $sql);

    // query update berhasil?
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:./view_data.php');
    } else {
        // kalau gagal tampilkan pesan
        die('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}
?>
