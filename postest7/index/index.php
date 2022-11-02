<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
    
</head>
<body>
    
<?php
//scrip buat tidak bisa back atau redirect ke home
session_start();
if(isset($_SESSION['akses'])){
    if($_SESSION['akses'] == "admin"){
    header("Location:../menu-admin/menu_admin.php");
    }
    else if($_SESSION['akses'] == "user"){
    header("Location:../menu-customer/menu_customer.php");
    }
}

?>


    <!--nav start-->
    <div class="wrapper">
        <div class="nav">
            <div class="logo">
                <img src="../gambar/logo-spare-part.png" alt="Logo">
                    <a href="#" class="header-content">Spare Part Motor</a>
                    <a href="../login/form_login.php" class="login">Login</a>
                    <a class="mode">MODE</a>
                    <input type="checkbox" class="input-checkbox" onclick="ubahmode()"></input>
            </div>
                <ul>
                <form action="hasil_cari.php" method="post" class="input_search">
                    <li>HOME</li>
                    <li><a href="aboutme.html " class="aboutme">ABOUT ME</a></li>
                    <li>FEATURES</li>
                    <li><button id="btn-merk" style="background-color:#0000 ; color: #ffff;">MERK</button></li>
                    <li>CONTACT ME</li>
                    
                        <input type="text" name="input_search" id="input_search" class="input-search" placeholder="cari barang" >
                        <input type="submit" name="search" class="search" value="cari" onclick="">
                    </form>
                </ul>
                
        </div>
    </div>
    <!--nav end-->

    <!-- content start-->
    <section class="main">
        <div class="container">
            <div class="main-content">
                <div id="gambar-merk" style="display:none ;">
                    <ul>
                        <li><img src="../gambar/merk-honda.png" alt="merk-honda" style="width: 50px;"></li>
                        <li><img src="../gambar/merk-yamaha.jpg" alt="merk-yamaha" style="width: 40px;"></li>
                        <li><img src="../gambar/merk-suzuki.png" alt="merk-suzuki" style="width: 60px;"></li>
                        <li><img src="../gambar/merk-rcb.png" alt="merk-rcb" style="width: 60px;"></li>
                        <li><img src="../gambar/merk-yss.jpeg" alt="merk-yss" style="width: 60px;"></li>
                        
                    </ul>
                    <script src="../script/script.js"></script>
                </div>
                <div class="text">
                    <h1>Upgrade Your Motorcycle Part<br> For Comfortable Riding <br>
                    Let's Ordered</h1>
                    <div class="btn-get-ordered">
                        <a href="#" class="btn">Get Ordered</a>
                    </div>
                </div>
            </div>
            <div class="banner">
                <img src="../gambar/bg-content.png" alt="content-image">
            </div>
        </div>
    </section>
    <!--content end-->

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="text-footer">
                <p>All Right Reserved by Irfan Arman H 2022</p>
            </div>
        </div>
    </footer>
    <!--footer end-->
</body>
</html>