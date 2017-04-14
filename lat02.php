<?php

// Class adalah sebuah wadah sebagai kerangka kerja
// Property adalah variabel yang ada di dalam class
// Constant adalah sebuah variabel/property atau wadah yang mengandung nilai tetap dan tidak dapat diubah

class Barang // Class
{
    public $nama; // Property 
    public $harga; // Property
    public $jumlah; // Property
    public $total;
    public $uang; // Property

    const STOK = 8; // Constant

    public function totalBelanja() //Method
    {
        // untuk memanggil const yang ada di dalam menggunakan self::
    	if ($this->jumlah < self::STOK) {
            // untuk memanggil property dan method yang ada di dalam menggunakan $this->
            $this->total = $this->jumlah * $this->harga;
            return 'Total belanja Anda : '.$this->total;
        } else {
            return 'Stok tidak mencukupi';
        }
    }

    public function totalUang()
    {
        // Contoh penggunakan $this, memanggil property.
        if ($this->total < $this->uang) {
            return 'Silahkan checkout';
        } else {
            return 'tidak mencukupi';
        }
    }
}

$Barang = new Barang();

$Barang->nama = 'Laptop';
$Barang->harga = 40;
$Barang->jumlah = 3;
$Barang->uang = 100;

echo $Barang->harga.' x '.$Barang->jumlah;
echo '<br/>';
echo $Barang->totalBelanja();
echo '<br/>';
echo 'uang Anda '.$Barang->uang.', '.$Barang->totalUang();