<?php
class Supplier
{
	private $supplierID;
	private $supplierNama;
	private $supplierTelepon;
	private $supplierAlamat;
	private $supplierEmail;
	
	function getSupplierID()
	{
		return $this->supplierID;
	}
	function getSupplierNama()
	{
		return $this->supplierNama;
	}
	function getSupplierTelp()
	{
		return $this->supplierTelepon;
	}
	function getSupplierAlamat()
	{
		return $this->supplierAlamat;
	}
	function getSupplierEmail()
	{
		return $this->supplierEmail;
	}
	
	function setSupplierID($ID)
	{
		$this->supplierID = $ID;
	}
	function setSupplierNama($nama)
	{
		$this->supplierNama = $nama;
	}
	function setSupplierTelepon($telp)
	{
		$this->supplierTelepon = $telp;
	}
	function setSupplierAlamat($alamat)
	{
		$this->supplierAlamat = $alamat;
	}
	function setSupplierEmail($email)
	{
		$this->supplierEmail = $email;
	}
	
	function __construct($id, $nama, $telp, $alamat, $email)
	{
		$this->setSupplierID($id);
		$this->setSupplierNama($nama);
		$this->setSupplierTelepon($telp);
		$this->setSupplierAlamat($alamat);
		$this->setSupplierEmail($email);
	}
	static function addSupplier($db, $id, $nama, $telp, $alamat, $email)
	{
		$sql = 'INSERT INTO Supplier(supplierID, supplierNama, supplierTelepon, supplierAlamat, supplierEmail) VALUES ("' . $id . '", "' . $nama . '", "' . $telp . '", "' . $alamat . '", "' . $email . '")';
		mysqli_query($db, $sql) or die(mysqli_error($db));
	}
	static function editSupplier($db, $id, $nama, $telp, $alamat, $email)
	{
		$sql = 'UPDATE Supplier
				supplierNama = "' . $nama . '",
				supplierTelepon = "' . $telp . '",
				supplierAlamat = "' . $alamat . '",
				supplierEmail = "' . $email . '"
				WHERE supplierID = "' . $id . '"';
		mysqli_query($db, $sql) or die(mysqli_error($db));
	}
	static function getSupplierByID($db, $ID)
	{
		$supplier = null;
		try
		{
			$sql = 'SELECT * FROM Supplier WHERE supplierID = "' . $ID . '"';
			$hasil = mysqli_query($db, $sql);
			if(mysqli_num_rows($hasil) > 0)
			{
				$tabel_hasil = mysqli_fetch_assoc($hasil);
				extract($tabel_hasil);
				$supplier = new Supplier($supplierID, $supplierNama, $supplierTelepon, $supplierAlamat, $supplierEmail);
			}
			else
			{
				$supplier = null;
			}
		}
		catch(Exception $ex)
		{
			echo $ex->getMessage();
		}
		return $supplier;
	}
}
?>