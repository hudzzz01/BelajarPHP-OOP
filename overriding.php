<?php 

//study kasus mtoko komik dan game

class Produk {

	//buat prototypenya dulu 

	//property :
	//visibility namaVariable = isiVariable; atau cara cepat : visibility namaVariable = isi, namavariable = isi;

	public $judul = 'judul';
	public $penerbit = 'nama penerit';
	public $penulis = 'nama penulis';
	public $jumlahHalaman = 100;
	public $jumlahWaktu = 50;
	public $harga = 0;


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

	public function getLabel(){

		return "$this->penulis, $this->penerbit";

	} 

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} - (Rp.{$this->harga}) ";
		return $str;
	}



}

class Komik extends Produk{

	public $jumlahHalaman = 0;

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0, $jumlahHalaman = 0){

			parent::__construct($judul ,$penulis ,$penerbit,$harga);
			$this->jumlahHalaman = $jumlahHalaman;

	}

	public function getInfoProduk(){
		$str = "komik : " . parent::getInfoProduk() ." - {$this->jumlahHalaman} Halaman.";

		return $str;
	}


}

class Game extends Produk{

	public $waktu = 0;

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0, $waktu = 0){

			parent::__construct($judul,$penulis,$penerbit,$harga);
			$this->harga = $harga;

	}

	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() ."  - {$this->jumlahWaktu} Waktu.";

		return $str;
	}
 

}


$produk1 = new Komik('naruto','Masashi Kishimoto', 'shounen Jump', 30000, 100 , 0);

$produk2 = new Game('moba','Mgak tau', 'monnton', 0, 0, 99);

$produk3 = new Produk('',NULL,'anuan');

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();










 ?>