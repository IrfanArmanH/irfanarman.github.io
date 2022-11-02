<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu customer</title>
    <link rel="stylesheet" href="menu_customer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['user'])){
            echo"
                <script>
                alert('Mohon untuk Login terlebih dahulu !!!');
                window.location.href=('../login/form_login.php');
                </script>
                " ;      
        }
    ?>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user-cstmr">
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="#" class="btn-nav"><i class="fa-regular fa-bell"></i></a>
                    <a href="profil_user.php"><i class="fa-solid fa-user-tie"> </i></a>
                    
                    <button class="tombol">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>

                    <nav class="menu">
                        <script src="../script/slideMenu.js"></script>    
                        <h4>Menu Navigasi</h4>
                        <ul>
                            <li><a href="#">Profil</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="../login/logout.php">Log Out</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    <div class="menu-slider">
		<div class="isi-slider">
			<img src="../gambar/content-gambar4.jpeg" alt="Gambar 1">
			<img src="../gambar/content-gambar2.jpg" alt="Gambar 2">
			<img src="../gambar/content-gambar3.jpg" alt="Gambar 3">
			<img src="../gambar/content-gambar5.jpg" alt="Gambar 4">
			<img src="../gambar/content-gambar6.jpg" alt="Gambar 5">
			<img src="../gambar/content-gambar3.jpg" alt="Gambar 6">
		</div>
	</div>
    
        
</body>
</html>