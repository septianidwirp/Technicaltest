<?php
class Kendaraan {
    protected $kecepatan;

    public function __construct($kecepatan) {
        $this->kecepatan = $kecepatan;
    }

    public function berjalan() {
        return "Kendaraan berjalan dengan kecepatan {$this->kecepatan} km/jam.";
    }
}

class Mobil extends Kendaraan {
    private $merk;

    public function __construct($kecepatan, $merk) {
        parent::__construct($kecepatan);
        $this->merk = $merk;
    }

    public function berjalan() {
        return "Mobil {$this->merk} berjalan dengan kecepatan {$this->kecepatan} km/jam.";
    }
}

$mobil = new Mobil(80, "Honda");
echo $mobil->berjalan();

/* penjelasan
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang didasarkan pada konsep 
"objek", yang dapat berisi data dan kode: data dalam bentuk atribut (atau properti), 
dan kode dalam bentuk metode (atau fungsi). Berikut adalah konsep utama dalam OOP:

1. Encapsulation (Enkapsulasi)
Definisi:
Encapsulation adalah mekanisme untuk menyembunyikan data internal dari sebuah objek dari akses langsung 
dari luar objek tersebut, dan hanya memungkinkan manipulasi data melalui metode yang disediakan oleh objek tersebut.

Keuntungan:
Keamanan Data: Melindungi data internal dari perubahan yang tidak diinginkan atau tidak sah.
Modularitas: Memisahkan kode menjadi unit yang dapat dikelola dengan lebih baik.
Pemeliharaan: Memudahkan pemeliharaan dan pembaruan kode karena internal objek dapat diubah 
tanpa mempengaruhi kode eksternal yang menggunakan objek tersebut.

2. Inheritance (Pewarisan)
Definisi:
Inheritance adalah mekanisme di mana sebuah kelas dapat mewarisi sifat (atribut dan metode) 
dari kelas lain. Kelas yang mewarisi disebut subclass (atau kelas turunan), dan kelas yang diwarisi 
disebut superclass (atau kelas dasar).

Keuntungan:
Reusability: Kode yang telah ditulis dapat digunakan kembali dalam kelas lain.
Hierarki Kelas: Memungkinkan organisasi kelas dalam bentuk hierarki, yang mencerminkan hubungan "is-a" (adalah).*/
