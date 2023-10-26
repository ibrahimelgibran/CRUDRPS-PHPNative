<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Periksa apakah data dengan username, email, dan password yang sama sudah ada dalam database
    $check_query = "SELECT * FROM tbl_user WHERE username = '$username' OR email = '$email' OR password = '$password'";
    $result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Pendaftaran Gagal: Data sudah ada dalam database.";
    } else {
        // Jika data belum ada, lakukan proses pendaftaran
        $query_sql = "INSERT INTO tbl_user (username, email, password)
                      VALUES ('$username', '$email', '$password')";
        if (mysqli_query($koneksi, $query_sql)) {
            header("Location: index.html");
        } else {
            echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
        }
    }

    mysqli_close($koneksi);
}
?>
