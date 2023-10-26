<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .satu {
            width: 30px;
        }

        th:nth-child(2) {
            display: none;
        }

        .tr {
            font-weight: bold;
        }

        /* Gaya untuk tombol "Tambah Data" */
        .btn-add {
            background-color: palevioletred;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-add:hover {
            background-color: pink;
        }

        /* Gaya untuk gambar profil */
        .profile-img {
            border-radius: 100%;
            margin-left: 10px;
        }

        /* Gaya untuk tautan Edit dan Hapus */
        .edit-link, .delete-link {
            text-decoration: none;
            color: #007BFF;
            margin-right: 10px;
        }

        .delete-link {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>View Data</h1>
        <a class="btn-add" href="./form_add.php">Tambah Data</a>
        <table>
            <thead>
                <tr class="tr">
                    <th class="satu">No</th>
                    <th hidden>Nik</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Edit / delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM tb_dosen";
                $query = mysqli_query($koneksi, $sql);
                $nomor = 1;
                while ($dosen = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $nomor . "</td>";
                    echo "<td hidden>" . $dosen['nik_dos'] . "</td>";
                    echo "<td style='display: flex; align-items: center;'>" . $dosen['nm_dos'] . "</td>";
                    echo "<td>" . $dosen['almt_dos'] . "</td>";
                    echo "<td>" . $dosen['jkl_dos'] . "</td>";
                    echo "<td>";
                    echo "<a href='./form_edit_data.php?nik=" . $dosen['nik_dos'] . "' class='edit-link'>Edit</a>";
                    echo "<a href='./ctrl_delete_data.php?nik=" . $dosen['nik_dos'] . "' class='delete-link'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
