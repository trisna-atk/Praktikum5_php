<?php 
require_once 'dbkoneksi.php';
$id=$_GET['iddel'];
$sql="DELETE FROM produk WHERE id=?";
$statment = $dbh->prepare($sql);
$statment->execute([$id]);
// redirect page
header('list_produk.php');
?>