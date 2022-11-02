<?php
include '../database/koneksi.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['kode'])) {
    $stmt = $pdo->prepare('SELECT * FROM tbl_barang WHERE kode = ?');
    $stmt->execute([$_GET['kode']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that kode!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $pdo->prepare('DELETE FROM tbl_barang WHERE kode = ?');
            $stmt->execute([$_GET['kode']]);
            $msg = 'You have deleted the contact!';
            header('Location: ../menu-admin/data_barang.php');
        } else {
            header('Location: ../menu-admin/data_barang.php');
            exit;
        }
    }
} else {
    exit('No kode specified!');
}
?>

<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<div class="content delete">
	<h2>Delete Contact kode<?=$contact['kode']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete contact kode<?=$contact['kode']?>?</p>
    <div class="yesno">
        <a href="delete.php?kode=<?=$contact['kode']?>&confirm=yes">Yes</a>
        <a href="delete.php?kode=<?=$contact['kode']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
