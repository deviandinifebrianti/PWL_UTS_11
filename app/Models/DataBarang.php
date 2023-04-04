<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\DataBarang as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DataBarang extends Model
{
    // use HasFactory;
    protected $table="data_barangs"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'kode_barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
        
        ];
}
