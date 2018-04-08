<?php
session_start();
if($_SESSION["user"] != null || $_SESSION["user"] != "")
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Informasi PT Batam Tunggal Mandiri</title>
<style type="text/css">
.error
{
	background-color: red;
}
.sukses
{
	background-color: green;
}
.dropbtn_data
{
	background-color: #F00;
	color: white;
	padding: 10px;
	font-size: 12px;
	border: none;
}
.dropdown_menu
{
	position: relative;
	display: inline-block;
}

</style>
</head>

<body>
<header><h1>Sistem Informasi PT. Batam Tunggal Mandiri</h1></header>
<div class="dropdown_menu">
   <button class="dropbtn_data">Data</button>
   <div class="dropdownitem_data">
      <a href="">Pelanggan</a>
      <a href="">Barang</a>
      <a href="">Supplier</a>
   </div>
</div>
<?php
}
else
{
	echo "<p><strong>Anda tidak terotorisasi untuk memasuki sistem ini!</strong></p>\n\n";
	echo 'Silahkan Anda melakukan login terlebih dahulu <a href="login.php">di sini!</a>';
	die();
}
?>