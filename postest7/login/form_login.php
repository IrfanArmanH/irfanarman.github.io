<?php 

require_once("../database/koneksi.php");
$pdo = pdo_connect_mysql();
$msg = '';

if(isset($_POST['login'])){


    //ambil inputan username dan password dari form registrasi
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE username=:username OR password=:password ";
    $stmt = $pdo->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($username != "admin"){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman Customer
            header("Location: ../menu-customer/menu_customer.php");
        }
    }
    //jika ingin masuk ke menu admin
    else if($username == "admin"){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["admin"] = $user;
            // login sukses, alihkan ke halaman Admin
            header("Location: ../menu-admin/dashboard.php");
        }
    }
}
?>

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
        <form action="" method="POST">
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