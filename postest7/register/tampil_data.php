<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
    <link rel="stylesheet"  type="text/css" href="style.php" media="screen">
    <style>
        body{
            background-color: aquamarine;
            background-image:url("gambar/bg-content.png");
            background-size: 50%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position-x: center;
        }


        .tampil-data{
            margin:25px 0px
        }

        table{
            width:100%;
            height:570px;
            background:transparent;
            border:1px solid black;
            outline:none;
            background-color:rgb(0,0,0,0.7);

        }

        .td-foto{
            margin-left:350px;
            border:1px solid white;
            background:transparent;
            width:400px;
            height:300px;
            margin-top:100px;
            margin-bottom:100px;
        }
    </style>
</head>
<body>
    <div class="tampil-data">
        <h1 style="text-align:center;color:white;">Data Akun</h1>
        <table>
        <tr class="tr-foto">
            <td rowspan="7" class="td-foto">
                <?php 
                
                $image_name = $_FILES['foto']['name'];
                $image_type = $_FILES['foto']['type'];
                $image_size = $_FILES['foto']['size'];
                $image_tmp_name= $_FILES['foto']['tmp_name'];
                move_uploaded_file($image_tmp_name,"../gambar/$image_name");
                echo"
                        <img src='../gambar/$image_name' width='250' align='center' margin-right='100' height='250'><br>
                ";
                ?>
            </td>
        </tr>
        <tr>
            <td style="color:white;"> 
                Nama : <?php echo "$_POST[nama]";?>
        
            </td> 
        </tr>
        <tr>
            <td style="color:white;"> Password : <?php echo "$_POST[password]" ;?></td>
        </tr>
        <tr>
            <td style="color:white;"> Alamat : <?php echo "$_POST[alamat]" ;?></td>
        </tr>
        <tr style="color:white;">
            <td>Jenis Kelamin : <?php echo "$_POST[gender]";?></td> 
        </tr>
        <tr style="color:white;">
            <td>Tanggal Lahir : <?php echo "$_POST[TGL]" ;?></td> 
        </tr>
        <tr style="color:white;">
            <td>No telp : <?php echo "$_POST[num]$_POST[phone]" ;?></td> 
        </tr>

        </table>
    </div>
</body>
</html>
