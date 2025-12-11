<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

// KONEKSI DATABASE (ubah sesuai punya kamu)
$koneksi = mysqli_connect("localhost", "root", "", "kantin_sehat");
if(mysqli_connect_errno()){
    echo "Gagal koneksi: " . mysqli_connect_error();
    exit;
}

// Ambil data dari URL
$item  = $_GET['item'] ?? '';
$harga = $_GET['harga'] ?? 0;

// Jika tombol simpan ditekan
if(isset($_POST['simpan'])){
    $qty = $_POST['qty'];
    $total = $qty * $harga;

    // Simpan ke database
    $query = "INSERT INTO transaksi (menu, harga, qty, total, tanggal)
              VALUES ('$item', '$harga', '$qty', '$total', NOW())";

    mysqli_query($koneksi, $query);

    echo "<h3>Transaksi Berhasil Disimpan!</h3>";
    echo "Menu: $item<br>";
    echo "Qty: $qty<br>";
    echo "Total: Rp".number_format($total)."<br><br>";
    echo "<a href='menu.php'>Kembali ke Menu</a>";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaksi - Kantin Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>Transaksi Pembelian</header>

<div class="content">
    <h2>Detail Pesanan</h2>

    <p><strong>Menu:</strong> <?= $item ?></p>
    <p><strong>Harga:</strong> Rp<?= number_format($harga) ?></p>

    <form method="POST">

        <label><strong>Jumlah (qty):</strong></label><br>
        <input type="number" name="qty" min="1" value="1" required><br><br>

        <button type="submit" name="simpan" class="btn-kirim">Simpan Transaksi</button>
    </form>

    <br>
    <a href="menu.php" class="btn-kembali">Kembali</a>
</div>

</body>
</html>