<?php
session_start();
include "koneksi.php";
$id_user = $_POST['id_user'];
$pass=md5($_POST['paswd']);
$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
	$login=mysqli_query($con,$sql);
	$ketemu=mysqli_num_rows($login);
	$r= mysqli_fetch_array($login);
	if ($ketemu > 0){
		$_SESSION['iduser'] = $r['id_user'];
		$_SESSION['passuser'] = $r['password'];
		echo "<div style='text-align :center;'>";
		echo "<h1>USER BERHASIL LOGIN<br></h1>";
		echo "<h3>Id User : ",$_SESSION['iduser'],"<br></h3>";
		echo "<h3>Password : ",$_SESSION['passuser'],"<br></h3>";
		echo "<a href=logout.php><b>LOGOUT</b></a></center>";
		echo "</div>";
	}
	else{
		echo "<center>Login gagal! username & password tidak benar<br>";
		echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
	}
mysqli_close($con);
}
else {
	echo "<center>Login gagal! Captcha tidak sesuai<br>";
	echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; }
?>