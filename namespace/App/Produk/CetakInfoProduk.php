<?php 
class CetakInfoProduk{

	public $daftarProduk = [];

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;

		// var_dump($this->daftarProduk);
	}

	public function cetak() {
		$str = "daftar produk : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}

}