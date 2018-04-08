<?php
require('Barang.php');
require('Pembelian.php');
class Pembelian_Info
{
	private $pembelian;
	private $barang_supply;
	private $jumlah_barang_beli;
	private $diskon_pembelian;
	private $harga_pembelian;
	
	public function getPembelian()
	{
		return $this->pembelian;
	}
	public function getBarangSupply()
	{
		return $this->barang_supply;
	}
	public function getJumlahBarangBeli()
	{
		return $this->jumlah_barang_beli;
	}
	public function getDiskonPembelian()
	{
		return $this->diskon_pembelian;
	}
	public function getHargaPembelian()
	{
		return $this->harga_pembelian;
	}
	
	public function setPembelian($ID)
	{
		$this->pembelian = $ID;
	}
	public function setBarangSupply($barang)
	{
		$this->barang_supply = $barang;
	}
	public function setJumlahBarangBeli($jumlah)
	{
		$this->jumlah_barang_beli = $jumlah;
	}
	public function setdiskonPembelian($diskon)
	{
		$this->diskon_pembelian = $diskon;
	}
	public function setHargaPembelian($harga)
	{
		$this->harga_pembelian = $harga;
	}
}
?>