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
	private $harga = 0;
	protected $diskon = 0;


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


	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
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
			$this->waktu = $waktu;

	}

	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() ."  - {$this->jumlahWaktu} Waktu.";

		return $str;
	}

	public function setDiskon($diskon=0){
		$this->diskon = $diskon;
	}
 

}


$produk1 = new Komik('naruto','Masashi Kishimoto', 'shounen Jump', 30000, 50);

$produk2 = new Game('moba','Mgak tau', 'monnton', 100000, 99);

$produk3 = new Produk('',NULL,'anuan');

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);

echo $produk2->getHarga();

echo var_dump($produk2);












 ?>