<?php
error_reporting(E_ALL^(E_NOTICE | E_WARNING));
include_once "koneksi.php";


//user
if ($_GET['page']=="data_user") {
    include_once "page/user/data_user.php";
}
else if ($_GET['page']=="tambah_user") {
    include_once "page/user/tambah_user.php";
}
else if ($_GET['page']=="edit_user") {
    include_once "page/user/edit_user.php";
}
else if ($_GET['page']=="update_user") {
    include_once "page/user/update_user.php";
}
else if ($_GET['page']=="hapus_user") {
    include_once "page/user/hapus_user.php";
}

//licence
else if ($_GET['page']=="data_licence") {
    include_once "page/licence/data_licence.php";
}

?>