<?php
require('db_conn.php');
require('Class/Pelanggan.php');
include('header.php');

if(isset($_POST['submit']))
{
	$arrayError = array();
	if(empty($_POST['custID']))
	{
		$arrayError[] = 'Kolom ID tidak boleh kosong!';
	}
	else
	{
		$custID = trim($_POST['custID']);
	}
	if(empty($_POST['custNama']))
	{
		$arrayError[] = 'Kolom Nama tidak boleh kosong!';
	}
	else
	{
		$custNama = trim($_POST['custNama']);
	}
	if(empty($_POST['custTelepon']))
	{
		$arrayError[] = 'Kolom Nomor Telepon tidak boleh kosong!';
	}
	else
	{
		$custTelepon = trim($_POST['custTelepon']);
	}
	if(empty($_POST['custAlamat']))
	{
		$arrayError[] = 'Kolom Alamat tidak boleh kosong!';
	}
	else
	{
		$custAlamat = trim($_POST['custAlamat']);
	}
	if(empty($_POST['custEmail']))
	{
		$arrayError[] = 'Kolom Email tidak boleh kosong!';
	}
	else
	{
		$custEmail = trim($_POST['custEmail']);
	}
	$jenisCust = $_POST['jenisCust'];
	$jenisNota = $_POST['jenisNota'];
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
		Pelanggan::addCust($db_conn, $custID, $custNama, $custTelepon, $custAlamat, $custEmail, $jenisCust, $jenisNota);
		echo '<div class="sukses">Penambahan berhasil!</div>';
	}
}
?>
<div id="tambah_pelanggan">
<form method="post" action="tambah_pelanggan.php">
<table border="2" bordercolordark="#000000">
  <tr>
    <td>ID: </td>
    <td><input name="custID" type="text" length="5" maxlength="5"></td>  
  </tr>
  <tr>
    <td>Nama: </td>
    <td><input type="text" name="custNama" length="20" maxlength="255"></td>
  </tr>
  <tr>
    <td>Nomor Telepon: </td>
    <td><input type="text" name="custTelepon" length="20" maxlength="255"></td>
  </tr>
  <tr>
    <td>Alamat: </td>
    <td><input type="text" name="custAlamat" length="20" maxlength="255"></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input type="text" name="custEmail" length="20" maxlength="255"></td>
  </tr>
  <tr>
    <td>Jenis Pelanggan: </td>
    <td>
      <select name="jenisPelanggan[]">
        <option value="HD">HD</option>
        <option value="HL">HL</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Jenis Nota: </td>
    <td>
      <select name="jenisNota[]">
        <option value="PT">PT</option>
        <option value="Toko">Toko</option>
      </select>
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Tambah Pelanggan"></td>
  </tr>
</table>
</form>
</div>
<?php
include('footer.php');
?>