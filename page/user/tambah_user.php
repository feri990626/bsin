<?php
$id = $_POST['iduser'];
$name = $_POST['namauser'];
$status = $_POST['status'];
$password = $_POST['password'];

$mysqli->query("INSERT INTO tbuser VALUES ('$id','$name','$status','$password')");

echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'> document.location='index.php?page=data_user';</script>";
?>