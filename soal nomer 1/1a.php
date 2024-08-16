<?php
class Mobil {
    private $warna;
    private $merk;
    
    public function __construct($warna, $merk) {
        $this->warna = $warna;
        $this->merk = $merk;
    }

    public function getInfoMobil() {
        return "Mobil ini berwarna {$this->warna} dan merknya adalah {$this->merk}.";
    }
}

$mobil = new Mobil("Merah", "Toyota");
echo $mobil->getInfoMobil();

/*Penjelasam
OOP (Object-Oriented Programming) adalah paradigma pemrograman yang menggunakan 
"objek" dan kelas untuk memodelkan data dan fungsionalitas dalam perangkat lunak. 
Ini penting karena memungkinkan modularitas, penggunaan kembali kode, dan pemeliharaan kode yang lebih mudah.*/