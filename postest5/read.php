<?php
include 'functions.php';
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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content read">
	<h2>DATA BARANG</h2>
	<a href="create.php" class="create-contact">Create</a>
	<table>
        <thead>
            <tr>
                <td>kode</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Merk</td>
                <td>Stok</td>
                <td>aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['kode']?></td>
                <td><?=$contact['nama']?></td>
                <td><?=$contact['harga']?></td>
                <td><?=$contact['merk']?></td>                
                <td><?=$contact['stok']?></td>
                <td class="actions">
                    <a href="update.php?kode=<?=$contact['kode']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?kode=<?=$contact['kode']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>