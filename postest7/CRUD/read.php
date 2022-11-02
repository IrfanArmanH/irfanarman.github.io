<?php
include '../database/koneksi.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 20;


$stmt = $pdo->prepare('SELECT * FROM tbl_barang ORDER BY kode LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


$num_contacts = $pdo->query('SELECT COUNT(*) FROM tbl_barang')->fetchColumn();
?>

<!-- css start -->
<style>
*{
    margin: 0;
    padding: 0;
}


th,td,tr{
    align:center;
    display:relative;
}

th{
    border:1px solid gray ;
    margin-top:1vh;
}
td{
    margin-left:5px;
}
</style>
<!-- css end -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content read">
	
        
            <tr>
                <td> <strong> Gambar</strong></td>
                <td> <strong> Kode</strong></td>
                <td> <strong> Nama</strong></td>
                <td> <strong> Harga</strong></td>
                <td> <strong> Merk</strong></td>
                <td> <strong> Stok</strong></td>
                <td> <strong> Aksi</strong></td>
                
            </tr>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td>
                    <img src="../gambar/<?php echo $contact['foto']; ?>" style="width: 120px;">
                </td>
                <td><?=$contact['kode']?></td>
                <td><?=$contact['nama']?></td>
                <td><?=$contact['harga']?></td>
                <td><?=$contact['merk']?></td>                
                <td><?=$contact['stok']?></td>
                <td class="actions">
                    <a href="../CRUD/update.php?kode=<?=$contact['kode']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="../CRUD/delete.php?kode=<?=$contact['kode']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr><a href="create.php" class="create-contact">Create</a></tr>
        </tfoot>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>