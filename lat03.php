<?php

// Property yang diatur public, dapat diakses oleh seluruh kode program di luar class, termasuk class turunan

// Property yang diatur private, satu satunya yang dapat mengakses adalah class itu sendiri.
// Private dapat diakses dengan menggunakan function sebagai perantara untuk melempar property keluar class.

// Contoh : 

class Laptop
{
    public $merk; // Property Public dapat diakses dari luar class
    private $harga; // Property Private tidak dapat diakses dari luar, hanya bisa diakses dari dalam class
    const STOK = 5;

    // Function setHarga() digunakan untuk mengatur harga dari dalam class, karena harga private
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    // Function showHarga() digunakan untuk menampilkan/mengakses harga yang private
    public function showHarga()
    {
        return $this->harga;
    }

}

$Laptop = new Laptop();

$Laptop->merk = 'Asus'; // Property public dapat diatur dari luar class dengan mudah.
$Laptop->setHarga(1000000); // Property private menggunakan function sebagai perantara.

echo 'harga : '.$Laptop->showHarga(); // Property private menggunakan function untuk mengambil value dari dalam class.
echo '<br/>';
echo 'merk : '.$Laptop->merk; // Property public bisa langsung diambil dari luar class.
