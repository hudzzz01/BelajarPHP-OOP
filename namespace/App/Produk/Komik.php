<?php

class Komik extends Produk implements Infoo{

	public $jumlahHalaman = 0;

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0, $jumlahHalaman = 0){

			parent::__construct($judul ,$penulis ,$penerbit,$harga);
			$this->jumlahHalaman = $jumlahHalaman;

	}

	function getInfoProduk(){
		return $this->getInfo();
	}

 	public function getInfo(){
		return $this->getJudul() . ", " . $this->getPenulis() . " & ". $this->getPenerbit() . "|" . $this->getHarga() . " | ".$this->getDiskon();
	}



}