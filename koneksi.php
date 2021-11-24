<?php
$host="localhost"; // pendeklarasian host yang digunakan server yaitu localhost
$username="root"; // pendeklarasian username yang digunakan server yaitu root
$password=""; // pendeklarasian password yang digunakan server kosong karena server tidak menggunakan password
$databasename="akademik"; // nama database yang digunakan yaitu akademik
$con=@mysqli_connect($host,$username,$password,$databasename); // melakukan koneksi antara host, username, password, dan nama database yang akan digunakan

// melakukan pengecekan koneksi kedatabase
if (!$con) { 
 echo "Error: " . mysqli_connect_error(); // jika belum terkoneksi maka browser akan memunculkan error
exit();
}
?>