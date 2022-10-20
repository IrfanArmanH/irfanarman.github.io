<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    $kode = isset($_POST['kode']) && !empty($_POST['kode']) && $_POST['kode'] != 'auto' ? $_POST['kode'] : NULL;

    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $merk = isset($_POST['merk']) ? $_POST['merk'] : '';
    $stok = isset($_POST['stok']) ? $_POST['stok'] : '';


    $stmt = $pdo->prepare('INSERT INTO tbl_barang VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$kode, $nama, $harga, $merk, $stok]);

    $msg = 'Created Successfully!';
}
?>

<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content update">
	<h2>Create</h2>
    <form action="create.php" method="post">
        <label for="kode">kode</label>
        <input type="text" name="kode" kode="kode">
        <label for="nama">Nama</label>
        <input type="text" name="nama" kode="nama">
        <label for="harga">harga</label>
        <input type="text" name="harga" kode="harga">
        <label for="merk"> Merk</label>
        <input type="text" name="merk" kode="merk">
        <label for="stok">Stok</label>
        <input type="text" name="stok" kode="stok">
        <input type="submit" value="Create" class="create">
    </form>
    <?php if ($msg): header('Location: data_barang.php');?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

