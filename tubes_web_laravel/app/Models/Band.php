<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "bands";

    public function pembeliansbands()
    {
        return $this->hasMany(PembelianBand::class,  'id_band', 'id');
    }

    protected $fillable = [
        'Nama',
        'Harga',
        'Image',
        'Deskripsi',
    ];
}