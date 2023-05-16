<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>PERPUSTAKAAN</title>
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        h2 {
            text-align: center;
            color: #343a40;
        }

        table {
            margin: 0 auto;
            border: 2px solid black;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
        }

        th {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        .btn {
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #212529;
        }
    </style>
</head>
<body>
    <h2>PERPUSTAKAAN</h2>
    <br>
    <table>
        <tr>
            <th>Buku</th>
            <th>Member</th>
            <th>Peminjaman</th>
        </tr>
        <tr>
            <td><a href="Buku.php" class="btn">Tambah Buku</a></td>
            <td><a href="Member.php" class="btn">Tambah Member</a></td>
            <td><a href="Peminjaman.php" class="btn">Tambah Peminjaman</a></td>
        </tr>
    </table>
</body>
</html>