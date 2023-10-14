<?php

require_once 'App/init.php';

$produk1 = new Buku("Naruto", "Kakashi", "Shizuka", 30000, 100);
$produk2 = new Game("Boruto", "Naruto", "Mamoyo", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
