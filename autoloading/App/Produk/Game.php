<?php 

class Game extends Produk implements Infoo{

	public $waktu = 0;

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0, $waktu = 0){

			parent::__construct($judul,$penulis,$penerbit,$harga);
			$this->waktu = $waktu;

	}

	function getInfoProduk(){
		return $this->getInfo();
	}

	public function getInfo(){
		return $this->getJudul() . ", " . $this->getPenulis() . " & ". $this->getPenerbit() . "|" . $this->getHarga() . " | ".$this->getDiskon();
	}

 

}