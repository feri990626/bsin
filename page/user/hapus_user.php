<?php
$mysqli->query("DELETE FROM tbuser WHERE `tbuser`.`iduser` = '$_GET[kode]'");

echo "<script>alert('Data Berhasil dihapus')</script>";
echo "<script type='text/javascript'> document.location='index.php?page=data_user';</script>";
?>