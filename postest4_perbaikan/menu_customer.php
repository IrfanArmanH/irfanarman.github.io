<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu customer</title>
</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['akses'])){
            echo"
                <script>
                alert('Mohon untuk Login terlebih dahulu !!!');
                window.location.href=('form_login.php');
                </script>
                " ;      
        }
    ?>

    <?php
        echo"
        <script>
        alert('Selamat Anda Berhasil Masuk !!!');
        </script>
        ";
    ?>

    <h1>Hallo <?php echo $_SESSION['akses'] ;?></h1>
    <a href="logout.php">Logout</a>
        
</body>
</html>