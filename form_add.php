<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* Gaya untuk latar belakang dan tata letak */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Gaya untuk kontainer formulir */
        .center-container {
            background-color: #f5f5f5;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            border-radius: 8px;
        }

        /* Gaya untuk tabel */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table tr td {
            padding: 10px;
        }

        /* Gaya untuk input dan textarea */
        .input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Gaya untuk tombol */
        .btn {
            background-color: #DDA0DD;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #BF8FCC;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <form action="add.php" method="post">
            <h2 style="text-align:center" class="btn">Form Tambah Data</h2>
            <table class="table">
                <tr>
                    <td><label for="nik">NIK</label>
                   <input class="input" type="text" name="nik" placeholder="Masukan Nik" />
                </tr>
                <tr>
                    <td><label for="nama_dosen">Nama</label>
                   <input class="input" type="text" name="nama_dosen" placeholder="Nama Anda" />
                </tr>
                <tr>
                    <td><label for="alamat_dosen">Judul</label>
                   <input class="input" type="text" name="alamat_dosen" placeholder="Nama Judul" />
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Deskripsi</label>
                   <input class="input" type="text" name="jenis_kelamin" placeholder="Deskripsi" />
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn" type="submit" value="Tambah" name="daftar" />
                        <input class="btn" type="button" value="    Dashboard" onclick="window.location.href='./dashboard.php'" />
                        <input class="btn" type="button" value="Cek View Data" onclick="window.location.href='./view_data.php'" />
                    
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
