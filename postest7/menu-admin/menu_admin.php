<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu admin</title>
    <link rel="stylesheet" href="menu-admin.css">
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
        <ul><br>
            <a href="dashboard.php"><li><i class="fa-solid fa-gauge-high"></i>&nbsp;&nbsp;<span>Dashboard</span></li></a><br>
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
    </div>
    <!--  sidebar end  -->
     
    <div class="container">
        <div class="header">
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
        <div class="content">
            <div class="cards">
                <div class="box-content">
                    <div class="box">
                        <h1>10</h1>
                        <h3>Data Pesan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-bag-shopping">&nbsp;&nbsp;</i><span></span>
                    </div>
                </div>
                <div class="box-content">
                    <div class="box">
                        <h1>30</h1>
                        <h3>Data Barang</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-sitemap"></i>&nbsp;&nbsp;<span></span>
                    </div>
                </div>
                <div class="box-content">
                    <div class="box">
                        <h1>15</h1>
                        <h3>Data Customer</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user-pen"></i>&nbsp;&nbsp;</i><span></span>
                    </div>
                </div>
                <div class="box-content">
                    <div class="box">
                        <h1>$1237</h1>
                        <h3>Penghasilan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-dollar-sign">&nbsp;&nbsp;</i><span></span>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="tabel-bayar">
                    <div class="judul">
                        <h2>Data Pembayaran</h2>
                        <a href="#" class="btn-lihat-semua">Lihat semua</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nama Customer</th>
                            <th>ID Customer</th>
                            <th>ID Pesan</th>
                            <th>Biaya</th>
                            <th>lihat</th>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>123</td>
                            <td>1a2b3c</td>
                            <td>$75</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>123</td>
                            <td>1a2b3c</td>
                            <td>$75</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>123</td>
                            <td>1a2b3c</td>
                            <td>$75</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>123</td>
                            <td>1a2b3c</td>
                            <td>$75</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>123</td>
                            <td>1a2b3c</td>
                            <td>$75</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>Andi</td>
                            <td>456</td>
                            <td>3k4k5b</td>
                            <td>$40</td>
                            <td><a href="#" class="btn-cstmr"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    </table>
                </div>
            <div class="tabel-barang">
                <div class="judul">
                    <h2>Data Barang</h2>
                    <a href="#" class="btn-lihat-semua">Lihat semua</a>
                </div>
                    <table>
                        <tr>
                            <th>Nama Barang</th>
                            <th>ID Barang</th>
                            <th>Stock</th>
                            <th>Edit</th>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        <tr>
                            <td>Gir</td>
                            <td>123</td>
                            <td>12</td>
                            <td><a href="#" class="btn-brg"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                        
                    </table>
            </div>
        </div>
    </div>

    
</body>
</html>