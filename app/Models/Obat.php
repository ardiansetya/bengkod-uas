<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai konvensi)
    protected $table = 'obats';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];

    public function detailPeriksa(){
        return $this->hasMany(DetailPeriksa::class, 'id_obat');
    }
}
