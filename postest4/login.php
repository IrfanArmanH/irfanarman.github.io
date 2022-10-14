<?php

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];


    $usernamelogin1 = "admin";
    $passwordlogin1 = "1";
    $usernamelogin2 = "user";
    $passwordlogin2 = "2";

    
        if(isset($_POST['login'])){
                // pengecekan user dan password login
                if ($username == $usernamelogin1 && $password == $passwordlogin1) {
                    session_start();
                    $_SESSION['akses'] = $username;
                    header("Location:menu_admin.php");
                }
                else if ($username == $usernamelogin2 && $password == $passwordlogin2) {
                    session_start();
                    $_SESSION['akses'] = $username;
                    header("Location:menu_customer.php");
                } 
                else {
                    echo"
                    <script>
                    alert('User dan Paswword yang anda masukan salah!!!');
                    window.location.href=('form_login.php');
                    </script>
                    ";
                }
        }
?>

