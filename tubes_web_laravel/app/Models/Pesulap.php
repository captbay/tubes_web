<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesulap extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pesulaps";

    public function pembelians()
    {
        return $this->hasMany(Pembelian::class,  'id_pesulap', 'id');
    }

    protected $fillable = [
        'Nama',
        'Harga',
        'Image',
        'Deskripsi',
    ];
}