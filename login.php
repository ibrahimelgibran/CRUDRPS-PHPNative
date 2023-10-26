<?php

require 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password ='$password'";

$result = mysqli_query($koneksi, $query_sql);
if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
} else {
   header("Location: ./gajadi.php?app=gagal");
}

?>