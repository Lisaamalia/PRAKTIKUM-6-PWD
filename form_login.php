<?php
echo "
<meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
	body {
		background: #f1f4f7;
	}

	input[type=text], input[type=password] {
	  width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;
	}

	.container {
	  padding: 16px; text-align:left;
	}

	.modal-content {
	  background-color: #fefefe; margin: 5% auto 15% auto;  border: 1px solid: white; width: 30%; 
	}

	.submit{
		padding-bottom:20px;
		text-align :center;
	}

	.header{
		padding: 10px; text-align:center;
	}
</style>
<form method=post action=cek_login.php class='modal-content'>
	<div class='header'>
		<h2> Login Form</h2>
	<hr></div>
	<div class='container'>
	<label><b>Username</b></label>
	<input name='id_user' type='text'>
	<label><b>Password</b></label>
	<input name='paswd' type='password'>

	<table><tr><td><label><b>Captcha</b></label>
	<p><img src='captcha.php' /></td>
	<td style='padding-left : 20px;' width='300px;'><input name='captcha_code' type='text' ></td></tr>
	</table>
	</div>
	<div class='submit'>
		<input type='submit' value='LOGIN'>		    	
	</div>
</form>";
?>