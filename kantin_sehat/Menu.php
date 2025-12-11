<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu - Kantin Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>Kantin Sehat</header>

<div class="content">
    <h2>Daftar Menu</h2>

    <div class="menu-list">

        <div class="menu-card">
            <img src="images/aqua.jpg" alt="Aqua">
            <h3>Aqua</h3>
            <p>Air mineral 600ml.</p>
            <a href="transaksi.php?item=Aqua&harga=4000">Beli</a>
        </div>

        <div class="menu-card">
            <img src="images/milo.jpg" alt="Milo UHT">
            <h3>Milo UHT</h3>
            <p>Minuman coklat UHT kotak.</p>
            <a href="transaksi.php?item=Milo UHT&harga=6000">Beli</a>
        </div>

        <div class="menu-card">
            <img src="images/sariroti.jpg" alt="Sari Roti Tawar Kupas">
            <h3>Sari Roti Tawar Kupas</h3>
            <p>Roti tawar tanpa kulit.</p>
            <a href="transaksi.php?item=Sari Roti Tawar Kupas&harga=12000">Beli</a>
        </div>

        <div class="menu-card">
            <img src="images/bengbeng.jpg" alt="Beng-Beng Wafer">
            <h3>Beng-Beng Wafer</h3>
            <p>Wafer coklat renyah.</p>
            <a href="transaksi.php?item=Beng-Beng Wafer&harga=2500">Beli</a>
        </div>

        <div class="menu-card">
            <img src="images/popmie.jpg" alt="Pop Mie Mini">
            <h3>Pop Mie Mini</h3>
            <p>Mie cup ukuran mini.</p>
            <a href="transaksi.php?item=Pop Mie Mini&harga=5000">Beli</a>
        </div>

    </div>
</div>

<a class="logout" href="logout.php">Logout</a>

</body>
</html>