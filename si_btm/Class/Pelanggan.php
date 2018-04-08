<?php
class Pelanggan
{
	private $custID;
	private $custNama;
	private $custTelepon;
	private $custAlamat;
	private $custEmail;
	private $jenisCust;
	private $jenisNota;
	
	function getCustID()
	{
		return $this->custID;
	}
	function getCustNama()
	{
		return $this->custNama;
	}
	function getCustTelepon()
	{
		return $this->custTelepon;
	}
	function getCustAlamat()
	{
		return $this->custAlamat;
	}
	function getCustEmail()
	{
		return $this->custEmail;
	}
	function getJenisCust()
	{
		return $this->jenisCust;
	}
	function getJenisNota()
	{
		return $this->jenisNota;
	}
	
	function setCustID($ID)
	{
		$this->custID = $ID;
	}
	function setCustNama($nama)
	{
		$this->custNama = $nama;
	}
	function setCustTelp($telpon)
	{
		$this->custTelepon = $telpon;
	}
	function setCustAlamat($alamat)
	{
		$this->custAlamat = $alamat;
	}
	function setCustEmail($email)
	{
		$this->custEmail = $email;
	}
	function setJenisCust($jenis)
	{
		$this->jenisCust = $jenis;
	}
	function setJenisNota($nota)
	{
		$this->jenisNota = $nota;
	}
	
	function __construct($ID, $nama, $telp, $alamat, $email, $jenis, $nota)
	{
		$this->setCustID($ID);
		$this->setCustNama($nama);
		$this->setCustTelp($telp);
		$this->setCustAlamat($alamat);
		$this->setCustEmail($email);
		$this->setJenisCust($jenis);
		$this->setJenisNota($nota);
	}
	
	static function getAllCust($db)
	{
		$tabel = array();
		$sql = 'SELECT * FROM Pelanggan;';
		$query = mysqli_query($db, $sql) or die(mysqli_error($db));
		if(mysqli_num_rows($query) > 0)
		{
			while($baris = mysqli_fetch_assoc($query))
			{
				$tabel = $baris;
			}
		}
		$db->close();
		return $tabel;
	}
	
	static function getCustByID($id)
	{
		$pelanggan = null;
		$sql = 'SELECT * FROM Pelanggan WHERE custID = "' . $id . '"';
		$query = mysqli_query($db, $sql) or die(mysqli_error($db));
		if(mysqli_num_rows($query) > 0)
		{
			$baris = mysqli_fetch_assoc($query);
			extract($baris);
			$pelanggan = new Pelanggan($custID, $custNama, $custTelepon, $custAlamat, $custEmail, $jenisCust, $jenisNota);
		}
		$db->close();
		return $pelanggan;
	}
	
	static function addCust($db, $ID, $nama, $telp, $alamat, $email, $jenis, $nota)
	{
		$sql = 'INSERT INTO Pelanggan(custID, custNama, custTelepon, custAlamat, custEmail, jenisCust, jenisNota) VALUES ("' . $ID . '", "' . $nama . '", "' . $telp . '", "' . $alamat . '", "' . $email . '", "' . $jenis . '", "' . $nota . '")';
		mysqli_query($db, $sql) or die(mysqli_error($db));
	}
	
	static function editCust($db, $ID, $nama, $telp, $alamat, $email, $jenis, $nota)
	{
		$sql = 'UPDATE Pelanggan
				SET
				custNama = "' . $nama . '",
				custTelepon = "' . $telp . '",
				custAlamat = "' . $alamat . '",
				custEmail = "' . $email . '",
				jenisCust = "' . $jenis . '",
				jenisNota = "' . $nota . '"
				WHERE custID = "' . $ID . '"';
		mysqli_query($db, $sql) or die(mysqli_error($db));
	}
}
?>