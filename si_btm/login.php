<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<?php
require('db_conn.php');
require('Class/admin.php');
session_start();

if(isset($_POST["submit"]))
{
	switch($_POST["submit"])
	{
		case "Login":
			$valid = Admin::loginCheck($db_conn, $_POST["txt_id"], $_POST["txt_password"]);
			if(!$valid)
			{
				echo "Login gagal!";
			}
			else
			{
				echo "Login sukses!\n";
				$_SESSION["user"] = $_POST["txt_id"];
				header('Refresh: 5; URL=index.php');
				echo 'Silahkan tunggu 5 detik untuk diredireksi ke halaman utama.';
				die();
			}
	}
}
?>
</head>

<body>
<form action="login.php" method="post">
<p>ID: <input type="text" name="txt_id"></p>
<p>Password: <input type="text" name="txt_password"></p>
<input type="submit" name="submit" value="Login">

</form>
</body>
</html>