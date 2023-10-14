<?php

// Jualan produk
// Buku
// Game

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLable()
    {
        return "$this->penulis,$this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Boruto";
// $produk2->tambahProperty = "baru";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Kakashi";
$produk3->penerbit = "Shizuka";
$produk3->harga = 100000;

$produk4 = new Produk();
$produk4->judul = "Boruto";
$produk4->penulis = "Naruto";
$produk4->penerbit = "Mamoyo";
$produk4->harga = 200000;

echo "Buku : " . $produk3->getLable();
echo "<br>";
echo "Game : " . $produk4->getLable();
