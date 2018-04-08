<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Logout </title>
<?php
if(isset($_GET['log']))
{
	if($_GET['log'] == 'ya')
	{
		session_start();
		session_unset();
		session_destroy();
		$_SESSION["user"] = "";
		header('Refresh: 10; URL=login.php');
		echo '<p>Anda telah melakukan logout. Terima kasih telah menggunakan sistem ini.</p>';
		echo '<p> Klik <a href="login.php"> sini </a> untuk login dan kembali ke dalam sistem </p>';
		die();
	}
}
?>
</head>

<body>
Apakah Anda yakin akan melakukan logout? <br>
<a href="logout.php?log=ya">Ya</a> | <a href="index.php">Tidak</a>
</body>
</html>