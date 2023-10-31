<?php
//require_once("../auth.php");
include('config.php');

$id = $_GET['nik'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE nik_dos=$id");
$dosen = mysqli_fetch_assoc($sql);

if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #9d76c1;
        }

        .content {
            background-color: #e5cff7;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 400px;
        }

        h3 {
            text-align: center;
        }

        form {
            margin: 0;
        }

        p {
            margin: 10px 0;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #9d76c1   ;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: purple;
        }
    </style>
</head>

<body>
    <div class="content">
        <header>
            <h3>Form Update Data</h3>
        </header>
        <form action="ctrl_edit_data.php" method="POST">
            <fieldset>
            <table class="table">
                <tr hidden="true">
                    <td><label for="nik">NIK</label>
                    <input type="text" name="nik" value="<?php echo $dosen['nik_dos'] ?>" />
                </tr>
                <tr>
                    <td><label for="nama_dosen">Nama</label>
                    <input type="text" name="nama_dosen" placeholder="Nama lengkap" value="<?php echo $dosen['nm_dos'] ?>" />
                </tr>
                <tr>
                    <td><label for="alamat_dosen">Judul</label>
                    <input type="text" name="alamat_dosen" placeholder="Judul" value="<?php echo $dosen['almt_dos'] ?>"/>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Deskripsi</label>
                    <input type="text" name="jenis_kelamin" placeholder="Deskripsi" value="<?php echo $dosen['jk_dos'] ?>"/>
                    
                </tr>
                <tr>
                    <td colspan="2">
                    <p>
                    <input type="submit" value="Save" name="edit" />
                </p>
                </tr>
            </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
