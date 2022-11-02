<?php
include 'function.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu admin</title>
    <link rel="stylesheet" href="form_tambah.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['akses'])){
            echo"
                <script>
                alert('Mohon untuk Login terlebih dahulu !!!');
                window.location.href=('../login/form_login.php');
                </script>
                " ;      
        }
    ?>
    <!-- <h1>Hallo <?php echo $_SESSION['akses'] ;?></h1> -->
    <!-- sidebar start  -->
    <div class="side-bar">
        <div class="admin">
        <i class="fa-solid fa-user-gear"></i>
        <h1>&nbsp;&nbsp;Admin</h1>
        </div>
        <ul>
            <a href="dashboard.php"><li><br><i class="fa-solid fa-gauge-high"></i>&nbsp;&nbsp;<span>Dashboard</span></li></a><br>
            <a href="data_barang.php"><li><i class="fa-solid fa-sitemap"></i>&nbsp;&nbsp;<span>Data Barang</span></li></a><br><br>
            <li><i class="fa-solid fa-user-pen"></i>&nbsp;&nbsp;</i><span>Data Customer</span></li><br><br>
            <li><i class="fa-solid fa-bag-shopping">&nbsp;&nbsp;</i><span>Data Pesan</span></li><br><br>
            <li><i class="fa-solid fa-dollar-sign">&nbsp;&nbsp;</i><span>Penghasilan</span></li><br><br>
            <li><i class="fa-solid fa-circle-exclamation">&nbsp;&nbsp;</i><span>Bantuan</span></li><br><br>
            <li><i class="fa-sharp fa-solid fa-gears">&nbsp;&nbsp;</i><span>Pengaturan</span></li><br><br>
            <a href="../login/logout.php">
                <li><i class="fa-solid fa-power-off">&nbsp;&nbsp;</i><span>Logout</span></li>
            </a>
        </ul>
    </div><div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user-admin">
                    <a href="#" class="btn-nav"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn-nav"><i class="fa-regular fa-bell"></i></a>
                    <a href="#" class="btn-nav"><i class="fa-solid fa-user-tie"></i></a>
                </div>
            </div>
        </div>
    <div class="tabel-barang">
        <form method="POST" action="form_tambah.php" enctype="multipart/form-data">
            
        <table>
            <tr>
                <tr>
                    <th class="judul_form">
                        <h3a >Form tambah Barang </h3><br><br>
                    </th>
                </tr>
            </tr><br><br>
            <tr>
                <th><label >Angka Kode Barang</label></th>
                <td><input type="number" name="kode"></td>
            </tr>
            <tr>
                <th><label >Nama Barang</label></th>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th><label >Harga Barang</label></th>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <th><label >Merk Barang</label></th>
                <tr>
                    <td>
                        <input type="radio" name="merk" value="Honda">
                        <label>Honda</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="merk" value="Yamaha">
                        <label>Yamaha</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="merk" value="Suzuki">
                        <label>Suzuki</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="merk" value="Kawasaki">
                        <label>Kawasaki</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="merk" value="Lainya">
                        <label>Lainya</label>
                    </td>
                </tr>
            </tr>
            <tr>
                <th><label >Stock Barang</label></th>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
        </form>
        <?php if ($msg): header('Location: data_barang.php');?>
        <p><?=$msg?></p>
        <?php endif; ?>
    </div>
    <!--  sidebar end  -->


    
</body>
</html>