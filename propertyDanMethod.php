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

	public function getLabel(){

		return "$this->penulis, $this->penerbit";

	} 



}

$produk1 = new Produk();
$produk1->judul = 'naruto';
$produk1->penulis = 'Masashi Kishimoto';
$produk1->penerbit = 'shounen jump';
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = 'moba';
$produk2->penulis = 'gak tau';
$produk2->penerbit = 'moonton';
$produk2->harga = 0;

echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();

 ?>