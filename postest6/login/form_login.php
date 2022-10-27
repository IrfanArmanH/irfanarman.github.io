<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="form_login.css">
</head>
<body>

<!-- scrip buat tidak bisa back atau redirect ke home -->
<?php
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

    <div class="form_login">
        <form action="../login/login.php" method="POST">
            <h1 >Form Login</h1> <br> 
            <label>Username</label> <br>
            <input type="text" name = "username" placeholder = "Masukan Nama"><br><br>
            <label>Password</label><br>
            <input type="password" name = "password" placeholder = "Password"><br><br>
            <input type="submit" name="login" value="Login"></input><br><br>
            <input type="checkbox" ><label>ingin menyimpan sandi ?</label><br><br><br>
            <label>klik register jika tidak punya akun</label><br>
            <br><a href="../register/form_regis.php" class = "register">Register</a>

        </form>
    </div>
</body>
</html>