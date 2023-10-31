<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffc436;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7e987;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            background-color: #fff;
            text-align: left;
        }

        th {
            background-color: #fff;
            color: #333;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        th:nth-child(2) {
            display: none;
        }

        .profile-img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .edit-link, .delete-link {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            margin-right: 10px;
        }

        .delete-link {
            color: #FF0000;
        }

        .btn-add {
            background-color: palevioletred;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
            display: block;
            width: 95%;
            text-align: center;
        }

        .btn-add:hover {
            background-color: plum;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Data</h1>
        <a class="btn-add" href="./form_add.php">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th class="satu">No</th>
                    <th hidden>Nik</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Edit / Hapus</th>
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
                    echo "<td>" . $dosen['nm_dos'] . "</td>";
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
