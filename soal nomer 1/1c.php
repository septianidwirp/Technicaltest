<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = ['kecepatan'];

    private $kecepatan;

    public function __construct($kecepatan)
    {
        $this->kecepatan = $kecepatan;
    }

    public function berjalan()
    {
        return "Kendaraan berjalan dengan kecepatan {$this->kecepatan} km/jam.";
    }

    public function getKecepatan()
    {
        return $this->kecepatan;
    }

    public function setKecepatan($kecepatan)
    {
        $this->kecepatan = $kecepatan;
    }
}

/*penjelasan
Encapsulation: Properti kecepatan dan merk disembunyikan dan hanya dapat diakses melalui metode get dan set.
Inheritance: Kelas Mobil mewarisi dari kelas Kendaraan dan menambahkan properti merk.
Polymorphism: Metode berjalan di kelas Mobil menimpa metode berjalan di kelas Kendaraan.
SOLID Principles:
Single Responsibility Principle: Setiap kelas hanya memiliki satu tanggung jawab. Kendaraan mengelola kecepatan dan Mobil mengelola merk.
Open/Closed Principle: Kelas Kendaraan dan Mobil dapat diperluas tanpa mengubah kodenya.
Liskov Substitution Principle: Kelas turunan (Mobil) dapat menggantikan kelas induk (Kendaraan) tanpa mengubah fungsionalitas.
Interface Segregation Principle: Tidak diterapkan dalam contoh ini karena tidak ada interface yang dibagi.
Dependency Inversion Principle: Controller KendaraanController bergantung pada abstraksi 
(tidak ada implementasi konkret dalam contoh ini, tetapi bisa diterapkan jika menggunakan interface).*/