<?php 

abstract class Produk {

	//buat prototypenya dulu 

	//property :
	//visibility namaVariable = isiVariable; atau cara cepat : visibility namaVariable = isi, namavariable = isi;

	private $judul = 'judul';
	private $penerbit = 'nama penerit';
	private $penulis = 'nama penulis';
	private $harga = 0;
	private $diskon = 0;


	//metode atau fungsi object
	//visibility namaFungsi(){return};

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0, $jumlahHalaman = 0, $jumlahWaktu = 0){

		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->penulis = $penulis;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->jumlahWaktu = $jumlahWaktu;
		$this->harga = $harga;

	}

	//getter



	public function getJudul(){
		return $this->judul;
	}
	
	public function getPenerbit(){
		return $this->penerbit;
	}

	public function getPenulis(){
		return $this->penulis;
	}
	public function getDiskon(){
		return $this->diskon;
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	//setter

	public function setJudul($judul){
		$this->judul = $judul;
	}
	public function setPenerbit($penerbit)
	{
		$this->penerbit = $penerbit;
	}
	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	public function setHarga($harga){
		$this->harga = $harga;
	}

	//getInfo
	


	abstract public function getInfo();



}