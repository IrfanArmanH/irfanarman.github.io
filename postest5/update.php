<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['kode'])) {
    if (!empty($_POST)) {
        $kode = isset($_POST['kode']) ? $_POST['kode'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
        $merk = isset($_POST['merk']) ? $_POST['merk'] : '';
        $stok = isset($_POST['stok']) ? $_POST['stok'] : '';
        $stmt = $pdo->prepare('UPDATE tbl_barang SET kode = ?, nama = ?, harga = ?, merk = ?, stok = ? WHERE kode = ?');
        $stmt->execute([$kode, $nama, $harga, $merk, $stok, $_GET['kode']]);
        $msg = 'Updated Successfully!';
    }
    $stmt = $pdo->prepare('SELECT * FROM tbl_barang WHERE kode = ?');
    $stmt->execute([$_GET['kode']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that kode!');
    }
} else {
    exit('No kode specified!');
}
?>

<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content update">
	<h2>Update Contact #<?=$contact['kode']?></h2>
    <form action="update.php?kode=<?=$contact['kode']?>" method="post">
        <label for="kode">kode</label>
        <label for="nama">Nama</label>
        <input type="text" name="kode" readonly value="<?=$contact['kode']?>" kode="kode">
        <input type="text" name="nama" value="<?=$contact['nama']?>" kode="nama">
        <label for="harga">harga</label>
        <label for="merk">Merk</label>
        <input type="text" name="harga" value="<?=$contact['harga']?>" kode="harga">
        <input type="text" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">Stok</label>
        <input type="text" name="stok" value="<?=$contact['stok']?>" kode="stok">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): header('Location: data_barang.php'); ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

