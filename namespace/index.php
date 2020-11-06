<?php 

require 'App/Init.php';

// $produk1 = new Komik('naruto','Masashi Kishimoto', 'shounen Jump', 30000, 50);

// $produk2 = new Game('moba','Mgak tau', 'monnton', 100000, 99);

// $CetakInfoProduk = new CetakInfoProduk;

// $CetakInfoProduk->tambahProduk($produk1);

// $CetakInfoProduk->tambahProduk($produk2);

// $CetakInfoProduk->cetak();

// echo $CetakInfoProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<hr>";

new ProdukUser();

