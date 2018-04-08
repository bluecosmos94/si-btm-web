<?php
require('db_conn.php');
require('Class/Supplier.php');
include('header.php');

if(isset($_GET['id']))
{
	
}
if(isset($_POST['submit']))
{
	$arrayError = array();
	if(empty($_POST['supplierID']))
	{
		$arrayError[] = 'Kolom ID tidak boleh kosong!';
	}
	else
	{
		$supplierID = trim($_POST['supplierID']);
	}
	if(empty($_POST['supplierNama']))
	{
		$arrayError[] = 'Kolom Nama tidak boleh kosong!';
	}
	else
	{
		$supplierNama = trim($_POST['supplierNama']);
	}
	if(empty($_POST['supplierTelepon']))
	{
		$arrayError[] = 'Kolom Nomor Telepon tidak boleh kosong!';
	}
	else
	{
		$supplierTelepon = trim($_POST['supplierTelepon']);
	}
	if(empty($_POST['supplierAlamat']))
	{
		$arrayError[] = 'Kolom Alamat tidak boleh kosong!';
	}
	else
	{
		$supplierAlamat = trim($_POST['supplierAlamat']);
	}
	if(empty($_POST['supplierEmail']))
	{
		$arrayError[] = 'Kolom Email tidak boleh kosong!';
	}
	else
	{
		$supplierEmail = trim($_POST['supplierEmail']);
	}
	
	if(count($arrayError) > 0)
	{
		echo '<div class="error">';
		echo '<p><strong>Maaf, Anda memiliki beberapa masalah tertera di bawah ini: </strong></p>';
		echo '<ul>';
		foreach($arrayError as $error)
		{
			echo '<li>' . $error . '</li>';
		}
		echo '</ul>';
		echo '<p> Silahkan coba lagi! </p>';
		echo '</div>';
	}
	else
	{
		Supplier::editCust($db_conn, $supplierID, $supplierNama, $supplierTelepon, $supplierAlamat, $supplierEmail);
		echo '<div class="sukses">Penambahan berhasil!</div>';
	}
}
?>
<div id="edit_supplier">
<form method="post" action="edit_supplier.php">
<table border="2" bordercolordark="#000000">
  <tr>
    <td>ID: </td>
    <td><input name="supplierID" type="text" length="5" maxlength="5" value="<?php echo $supplierID;?>"></td>  
  </tr>
  <tr>
    <td>Nama: </td>
    <td><input type="text" name="supplierNama" length="20" maxlength="255" value="<?php echo $supplierNama;?>"></td>
  </tr>
  <tr>
    <td>Nomor Telepon: </td>
    <td><input type="text" name="supplierTelepon" length="20" maxlength="255" value="<?php echo $supplierTelepon;?>"></td>
  </tr>
  <tr>
    <td>Alamat: </td>
    <td><input type="text" name="supplierAlamat" length="20" maxlength="255" value="<?php echo $supplierAlamat;?>"></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input type="text" name="supplierEmail" length="20" maxlength="255" value="<?php echo $supplierEmail;?>"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Edit Supplier"></td>
  </tr>
</table>
</form>
</div>
<?php
include('footer.php');
?>