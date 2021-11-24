<?php
include "koneksi.php";
session_start();
session_destroy();
echo "<h1 style='text-align :center;'> Anda telah sukses keluar sistem <b>LOGOUT</b></h1>";
?>