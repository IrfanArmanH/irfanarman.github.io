<?php
include '../database/koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    $kode = isset($_POST['kode']) && !empty($_POST['kode']) && $_POST['kode'] != 'auto' ? $_POST['kode'] : NULL;

    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $merk = isset($_POST['merk']) ? $_POST['merk'] : '';
    $stok = isset($_POST['stok']) ? $_POST['stok'] : '';
    $foto = isset($_POST['foto']) ? $_POST['foto'] : '';
    



    $stmt = $pdo->prepare('INSERT INTO tbl_barang VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$kode, $nama, $harga, $merk, $stok,$foto]);

    $msg = 'Created Successfully!';
}
?>




<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <div class="form-create">
    <h2>Create Data</h2>
        <form action="create.php" method="post">
            <label for="kode">Kode</label>
            <input type="text" name="kode" kode="kode"><br><br>
            <label for="nama">Nama</label>
            <input type="text" name="nama" kode="nama"><br><br>
            <label for="harga">Harga</label>
            <input type="text" name="harga" kode="harga"><br><br>
            <label for="merk"> Merk</label><br>
            <input type="radio" name="merk" value="Honda">
            <label >Honda</label>
            <input type="radio" name="merk" value="Suzuki">
            <label >Suzuki</label>
            <input type="radio" name="merk" value="RCB">
            <label >RCB</label>
            <input type="radio" name="merk" value="Honda">
            <label >Kawasaki</label>
            <input type="radio" name="merk" value="Kawasaki">
            <label>Yamaha</label><br><br>
            <label >Foto(masukan gambar di file gambar htdocs)</label><br>
            <input type="file" name="foto" accept="gambar/*jpeg,gambar/*jpg"><br><br>
            <label for="stok">Stok</label>
            <input type="text" name="stok" kode="stok"><br><br>
            <input type="submit" value="Create" class="create">
            
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

    .form-create{
        background-color: rgba(0, 0, 0, 0.55);
        width: 650px;
        height: 590px;
        position: absolute;
        left: 28%;
        top: 15%;
        position: absolute;
        padding: 60px 60px;
        transform: translate(-50px,-50px);
        box-sizing: border-box;
    }
    .form-create label{
    color: white;
    background: transparent;
    }

    .form-create input[type="text"],input[type="password"],input[type="radio"]{
        color:white;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        font-size: 16px;
        margin-top: 10px;
        padding: 3px 0px;
    }

    .form-create input[type="radio"]{
        padding: 5px 0px;
        margin-top: 10px;
        color: white;
        font-size: 15px;
    }

    .form-create input[type="file"]{
        padding: 5px 0px;
        margin-top: 10px;
        border: none;
        border-bottom: 1px solid white;
        background: transparent;
        outline: none;
        color: white;
    }

    .form-create input[type="submit"]{
        padding: 13px 28px;
        border: none;
        border-radius: 10px;
        background-color: rgb(35, 221, 221);
        color: rgb(255, 255, 255);
        margin: 0px 15px;
        cursor: pointer;
    }

    .form-create input[type="submit"]:hover{
        background-color: rgb(243, 241, 241);
        color:rgb(0, 0.9, 0);
        transition: .4s ease;
    }

    .form-create button{
        text-decoration: none;
        border: none;
        outline: none;
        background: transparent;
    }

    .form-create button a{
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
    .form-create button a:hover{
        color:rgb(0, 0.9, 0);
        background-color: white;
        transition: .4s ease;
        
    }
</style>
<!-- css end -->
