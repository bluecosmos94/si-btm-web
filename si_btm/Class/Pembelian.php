<?php
require('Supplier.php');
class Pembelian
{
	private $pembelianID;
	private $notaPembelian;
	private $tanggalPembelian;
	private $keteranganPembelian;
	private $supplier;
	
	function getPembelianID()
	{
		return $this->pembelianID;	
	}
	function getNotaPembelian()
	{
		return $this->notaPembelian;	
	}
	function getTanggalPembelian()
	{
		return $this->tanggalPembelian;	
	}
	function getKeteranganPembelian()
	{
		return $this->keteranganPembelian;	
	}
	function getSupplier()
	{
		return $this->supplier;	
	}
	
	function setPembelianID($ID)
	{
		$this->pembelianID = $ID;
	}
	function setNotaPembelian($nota)
	{
		$this->notaPembelian = $nota;
	}
	function setTanggalPembelian($tanggal)
	{
		$this->tanggalPembelian = $tanggal;
	}
	function setKeteranganPembelian($keterangan)
	{
		$this->keteranganPembelian = $keterangan;
	}
	function setSupplier($db, $supplierID)
	{
		try
		{
			$supplier = Supplier::getSupplierByID($db, $supplierID);
			if($supplier != null)
			{
				$this->supplier = $supplier;
			}
			else
			{
				throw new Exception();
			}
		}
		catch(Exception $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	function __construct($db, $ID, $nota, $tanggal, $keterangan, $supplierID)
	{
		$this->setPembelianID($ID);
		$this->setNotaPembelian($nota);
		$this->setTanggalPembelian($tanggal);
		$this->setKeteranganPembelian($keterangan);
		$this->setSupplier($db, $supplierID);
	}
}
?>