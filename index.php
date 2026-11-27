<?php

require_once('./jasa.php');

use Pbo\Marketplace\jasa;

//object
$produk = new Jasa();

$produk ->setKode("P0001")
        ->setNama("Laptop")
        ->setHarga(10000000)
        ->setStok(5);


//total

echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: ". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak();
echo "<br/>";

echo "total harga setelah pajak: Rp.". $produk->total();

echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment("qris");