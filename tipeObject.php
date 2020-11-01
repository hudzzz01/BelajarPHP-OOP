<?php 

//study kasus mtoko komik dan game

class Produk {

	//buat prototypenya dulu 

	//property :
	//visibility namaVariable = isiVariable; atau cara cepat : visibility namaVariable = isi, namavariable = isi;

	public $judul = 'judul';
	public $penerbit = 'nama penerit';
	public $penulis = 'nama penulis';
	public $harga = 0;

	//metode atau fungsi object
	//visibility namaFungsi(){return};

	public function __construct($judul = 'judul' ,$penulis = 'penulis',$penerbit = 'penerbit',$harga = 0){

		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->penulis = $penulis;
		$this->harga = $harga;

	}

	public function getLabel(){

		return "$this->penulis, $this->penerbit";

	} 



}

/**
 * 
 */
class CetakInfoProduk
{


	function cetak(Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
	
}





$produk1 = new Produk('naruto','Masashi Kishimoto', 'shounen Jump', 30000);

$produk2 = new Produk('moba','Mgak tau', 'monnton', 0);

$produk3 = new Produk('',NULL,'anuan');



echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
echo "ketiga : ". $produk3->getLabel();
echo "<br>";


$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);







 ?>