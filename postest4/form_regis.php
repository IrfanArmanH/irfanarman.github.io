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
        <form action="tampil_data.php" method="POST" enctype="multipart/form-data">
            <h1>Form Registrasi</h1><br>
            <label>Buat Akun</label><br><br>
            <label >Nama</label><br>
            <input type="text" name="nama" placeholder="Masukan Nama" cols="40"><br><br>
            <label >Password</label><br>
            <input type="password" name="password" placeholder="Masukan Password"><br><br>
            <label >Alamat</label><br>
            <textarea name="alamat" cols="70"></textarea><br><br>
            <label >Jenis Kelamin</label><br>
            <input type="radio" name="gender" value="Laki-Laki">
            <label >Laki-Laki</label> 
            <input type="radio" name="gender" value="Perempuan">
            <label>Perempuan</label><br><br>
            <label >Tanggal Lahir</label><br>
            <input type="date" name="TGL"><br><br>
            <label >Foto</label><br>
            <input type="file" name="foto" accept="gambar/*jpeg,gambar/*jpg"><br><br>
            <label >No Telp</label><br>
            <select name="num" id="number">
                <option value="+62">+62</option>
                <option value="+63">+63</option>
                <option value="+91">+91</option>
                <option value="+86">+86</option>
            </select>
            <input type="phone" name="phone" placeholder="Masukan No Telp"><br><br><br>
            <input type="submit" name="submit" value="Daftar">
            <button class="btn-back"><a href="form_login.php">Back</a></button><br><br>
            
            
        </form>
    </div>
</body>
</html>