<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komika extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "komikas";

    // public function pembelians()
    // {
    //     return $this->hasMany(Pembelian::class,  'id_komika', 'id_komika');
    // }

    protected $fillable = [
        'Nama',
        'Harga',
        'Image',
        'Deskripsi',
    ];
}