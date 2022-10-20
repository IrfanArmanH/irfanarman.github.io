
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu admin</title>
    <link rel="stylesheet" href="data_barang.css">
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
        
        <table>
            <tr>
                <th>
                    <label>Kategori :
                        <select name="Pilih Kategori" id="select">
                            <option value="semua kategori">semua kategori</option>
                            <option value="spare part motor">spare part motor</option>
                            <option value="aksesoris motor">aksesoris motor</option>
                        </select>
                    </label>
                </th>
                <th>
                    <label>Merk :
                        <select name="Pilih Merk" id="select">
                            <option value="Honda">Honda</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="RCB">RCB</option>
                            <option value="Kawasaki"></option>
                        </select>
                    </label>
                </th>
                <th>
                    <label>Urutkan :
                        <select name="Urut berdasarkan" id="select">
                            <option value="terbaru">terbaru</option>
                            <option value="terlama">terlama</option>
                            <option value="populer">populer</option>
                        </select>
                    </label>
                </th>
                <th><a href="create.php" class="create-contact">Create</a></th>
            </tr>
            
            <?php
            include 'read.php';
            ?>
            <tr>
            
        </table>
    </div>
    <!--  sidebar end  -->
</body>
</html>