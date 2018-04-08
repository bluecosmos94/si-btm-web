<?php
require('Pelanggan.php');
class Penjualan
{
	private $penjualanID;
	private $notaPenjualan;
	private $tanggalPenjualan;
	private $keteranganPenjualan;
	private $pembeli;
	
	function getPenjualanID()
	{
		return $this->penjualanID;	
	}
	function getNotaPenjualan()
	{
		return $this->notaPenjualan;	
	}
	function getTanggalPenjualan()
	{
		return $this->tanggalPenjualan;	
	}
	function getKeteranganPenjualan()
	{
		return $this->keteranganPenjualan;	
	}
	function getPembeli()
	{
		return $this->pembeli;	
	}
	
	function setPenjualanID($ID)
	{
		$this->penjualanID = $ID;
	}
	function setNotaPenjualan($nota)
	{
		$this->notaPenjualan = $nota;
	}
	function setTanggalPenjualan($tanggal)
	{
		$this->tanggalPenjualan = $tanggal;
	}
	function setKeteranganPenjualan($keterangan)
	{
		$this->keteranganPenjualan = $keterangan;
	}
	function setPembeli($db, $pembeliID)
	{
		try
		{
			$pembeli = Pelanggan::getPelangganByID($db, $pembeliID);
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
		$this->setPenjualanID($ID);
		$this->setNotaPenjualan($nota);
		$this->setTanggalPenjualan($tanggal);
		$this->setKeteranganPenjualan($keterangan);
		$this->setPembeli($db, $pembeliID);
	}
}
?>