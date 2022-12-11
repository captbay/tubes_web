<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianBand extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pembelian_bands";

    protected $fillable = [
        'id_user',
        'tgl_pembelian',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function band()
    {
        return $this->belongsTo(Band::class, 'id_band');
    }
}