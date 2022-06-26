<?php
$id = $_POST['iduser'];
$name = $_POST['namauser'];
$status = $_POST['status'];
$password = $_POST['password'];

$mysqli->query("UPDATE `tbuser` SET `namauser` = '$name', `status` = '$status', `password` = '$password' WHERE `tbuser`.`iduser` = '$id';");

echo "<script>alert('Data Berhasil diupdate')</script>";
echo "<script type='text/javascript'> document.location='index.php?page=data_user';</script>";
?>