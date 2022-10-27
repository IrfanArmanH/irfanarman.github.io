<?php
include '../database/koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['kode'])) {
    if (!empty($_POST)) {
        $kode = isset($_POST['kode']) ? $_POST['kode'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
        $merk = isset($_POST['merk']) ? $_POST['merk'] : '';
        $stok = isset($_POST['stok']) ? $_POST['stok'] : '';
        $foto = isset($_POST['foto']) ? $_POST['foto'] : '';
        $stmt = $pdo->prepare('UPDATE tbl_barang SET kode = ?, nama = ?, harga = ?, merk = ?, stok = ?, foto = ? WHERE kode = ?');
        $stmt->execute([$kode, $nama, $harga, $merk, $stok,$foto, $_GET['kode']]);
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
<div class="content-update">
	<h2>Update Contact #<?=$contact['kode']?></h2>
    <form action="update.php?kode=<?=$contact['kode']?>" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$contact['nama']?>" kode="nama"><br><br>
        <label for="kode">kode</label>
        <input type="text" name="kode" readonly value="<?=$contact['kode']?>" kode="kode"><br><br>
        <label for="harga">harga</label>
        <input type="text" name="harga" value="<?=$contact['harga']?>" kode="harga"><br><br>
        <label for="merk"> Merk</label><br>
        <input type="radio" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">Honda</label>
        <input type="radio" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">Suzuki</label>
        <input type="radio" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">RCB</label>
        <input type="radio" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">Kawasaki</label>
        <input type="radio" name="merk" value="<?=$contact['merk']?>" kode="merk">
        <label for="merk">Yamaha</label><br><br>
        <label >Foto(masukan gambar di file gambar htdocs)</label><br>
        <input type="file" name="foto" accept="gambar/*jpeg,gambar/*jpg" value="<?=$contact['foto']?>" kode="foto"><br><br>
        <label for="merk">Stok</label>
        <input type="text" name="stok" value="<?=$contact['stok']?>" kode="stok"><br><br>
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): header('Location: ../menu-admin/data_barang.php'); ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<!-- css start -->
<style>
    body{
        background-color: rgb(101, 221, 181);
        background-image:url(../gambar/bg-content.png);
        background-size: 50%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position-x: center;
    }

    h2{
        font-size:35px;
        text-align:center;
        margin-top:5vh;
        color:white;
    }

    .content-update{
        background-color: rgba(0, 0, 0, 0.55);
        width: 650px;
        height: 570px;
        position: absolute;
        left: 28%;
        top: 23%;
        position: absolute;
        padding: 60px 60px;
        transform: translate(-50px,-50px);
        box-sizing: border-box;
    }
    .content-update label{
    color: white;
    background: transparent;
    }

    .content-update input[type="text"],input[type="password"],input[type="radio"]{
        color:white;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        font-size: 16px;
        margin-top: 10px;
        padding: 3px 0px;
    }

    .content-update input[type="radio"]{
        padding: 5px 0px;
        margin-top: 10px;
        color: white;
        font-size: 15px;
    }

    .content-update input[type="date"]{
        padding: 5px 0px;
        margin-top: 10px;
        border: none;
        border-bottom: 1px solid white;
        background: transparent;
        outline: none;
        color: white;
    }

    .content-update input[type="file"]{
        padding: 5px 0px;
        margin-top: 10px;
        border: none;
        border-bottom: 1px solid white;
        background: transparent;
        outline: none;
        color: white;
    }

    .content-update input[type="submit"]{
        padding: 13px 28px;
        border: none;
        border-radius: 10px;
        background-color: rgb(35, 221, 221);
        color: rgb(255, 255, 255);
        margin: 0px 15px;
        cursor: pointer;
    }

    .content-update input[type="submit"]:hover{
        background-color: rgb(243, 241, 241);
        color:rgb(0, 0.9, 0);
        transition: .4s ease;
    }

    .content-update button{
        text-decoration: none;
        border: none;
        outline: none;
        background: transparent;
    }

    .content-update button a{
        border: none;
        outline: none;
        text-decoration: none;
        padding: 13px 30px;
        border-radius: 10px;
        background-color: rgb(35, 221, 221);
        color: rgb(255, 255, 255);
        margin: 0px 10px;
        cursor: pointer;
    }
    .content-update button a:hover{
        color:rgb(0, 0.9, 0);
        background-color: white;
        transition: .4s ease;
        
    }
</style>
<!-- css end -->
