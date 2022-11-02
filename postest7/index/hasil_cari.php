
<?php
//koneksi
$koneksi = new mysqli('localhost','root','','db_spare_part');
if (isset($_POST['search'])){
    //variable
    $keyword = $_POST['input_search'];
    $query = $koneksi->query("SELECT * FROM tbl_barang WHERE nama LIKE '%$keyword%' OR merk LIKE '%$keyword%'");
    $row = mysqli_num_rows($query);
    //cek apakah ada satu  
    if ($row==0){
        ?>
        <center><h3>404 NOT FOUND</h3></center>
        <?php  
    }
    else{
        ?>
        <center><h3>menampilkan <?php echo $row;?> data.</h3></center>
        <?php
        ?>
       <link rel="stylesheet" href="hasil_cari.css">
        <table class="table-sea">
        <tr class="nol">
                <td class="main">NO</td>
                <td class="main">Nama Barang</td>
                <th class="main">Merek Barang</td>
        </tr>
        <?php
        foreach ($query as $rows){
        @$no++;
        $nama_barang = $rows['nama'];
        $merek_barang = $rows['merk'];;
        ?>
        <tr class="nol1">
        <td class="main2"><?php echo $no;?></td>
        <td class="main2"><?php echo $nama_barang;?></td>
        <td class="main2"><?php echo $merek_barang;?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}