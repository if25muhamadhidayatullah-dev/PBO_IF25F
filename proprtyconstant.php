<?php


class produk {

    //property

    public string $kode;

    public string $nama;

    public int $harga;

    public int $stok;


    //constan

    public const PAJAK = 0.11;
public function pajak () {
    return self::PAJAK * 100;
}
public function total () {
    return $->harga + ($this->harga * self::PAJAK);
}


}


//object

$produk = new produk();

$produk->kode = 'A001';

$produk->nama = 'Laptop';

$produk->harga = 1000000;

$produk->stok = 5;



//hitung pajak

$pajak = produk::PAJAK * 100; // 1,1jt

$jumlahpajak = $produk->harga * produk::PAJAK;


//total

$total = $produk->harga + $jumlahpajak;


echo "Produk: ". $produk->nama;

echo "<br/>";

echo "Harga: ". $produk->harga;

echo "<br/>";

echo "Stok: ". $produk->stok;

echo "<br/>";

echo "Pajak: ". $produk ->pajak()."%";

echo "<br/>";

echo "Total Harga: Rp". $produk->total();
echo "Pajak: ". $pajak. "%";

echo "<br/>";

echo "Total Harga: Rp". $total;
