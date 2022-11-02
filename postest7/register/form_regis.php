<?php
include '../database/koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

    //ambil inputan username dan password dari form registrasi
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $cpassword = isset($_POST['cpassword']) ;

   // filter data yang diinputkan
   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
   // enkripsi password
   $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
   $cpassword = password_hash($_POST["cpassword"], PASSWORD_DEFAULT);

    //cek apakah password sama confirm password sama
    if($password != $cpassword){
        $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
        echo "
            <script>
                    alert('Passord yang di input harus sama');
                    window.location.href=('form_regis.php');
            </script>
        ";
    }
        //eksekusi database menggunakan sql
    $stmt = $pdo->prepare('INSERT INTO user VALUES (?,?,?)');
    $stmt->execute(['',$username, $password]);
    $msg = 'Created Successfully!';

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="form_register.css">
</head>
<body>
    <div class="form-register">
        <form action="form_regis.php" method="POST" >
            <h1>Form Registrasi</h1><br>
            <label>Buat Akun</label><br><br>
            <label >Username</label><br>
            <input type="text" name="username" placeholder="Masukan Username" cols="40"><br><br>
            <label >Password</label><br>
            <input type="password" name="password" placeholder="Masukan Password"><br><br>
            <label >Confirm Password</label><br>
            <input type="password" name="cpassword" placeholder="Masukan Konfirmasi Password"><br><br>
            <input type="submit" name="register" value="Daftar">
            <button class="btn-back"><a href="../login/form_login.php">Back</a></button><br><br> -->
            
        </form>
        <?php if ($msg): header('Location: ../login/form_login.php'); ?>
        <p><?=$msg?></p>
        <?php endif; ?> 
    </div>
</body>
</html>