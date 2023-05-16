<?php
require "Koneksi.php";
require "Model.php";

$tglPinjam = $tglKembali = "";

if (isset($_GET['id_peminjaman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman = new Model();
    $result = $peminjaman->getPeminjamanById($id);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $tglPinjam = $_POST['tgl_pinjam'];
        $tglKembali = $_POST['tgl_kembali'];
        $peminjaman = new Model();
        $peminjaman->setPeminjaman($tglPinjam, $tglKembali);
        header("Location: Peminjaman.php");
        exit();
    }

    if (isset($_POST['update'])) {
        $tglPinjam = $_POST['tgl_pinjam'];
        $tglKembali = $_POST['tgl_kembali'];
        $peminjaman = new Model();
        $peminjaman->editPeminjaman($id, $tglPinjam, $tglKembali);
        header("Location: Peminjaman.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    <title>Peminjaman Buku</title>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-3">
            <h1 class="text-center">Peminjaman Buku</h1>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-secondary text-white text-center">
                            <?php
                            if (isset($_GET['id_peminjaman'])) {
                                echo "Edit Data Peminjaman";
                            } else {
                                echo "Tambah Data Peminjaman";
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo (isset($_GET['id_peminjaman'])) ? $row[0]['tgl_pinjam'] : ''; ?>" placeholder="Tanggal Peminjaman" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_kembali">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo (isset($_GET['id_peminjaman'])) ? $row[0]['tgl_kembali'] : ''; ?>" placeholder="Tanggal Pengembalian" required>
                                </div>
                                <?php
                                if (isset($_GET['id_peminjaman'])) {
                                    echo '<button type="submit" name="update" class="btn btn-secondary my-2">Update</button>';
                                } else {
                                    echo '<button type="submit" name="submit" class="btn btn-primary my-2">Tambah</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>