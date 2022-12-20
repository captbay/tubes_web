<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianPesulap extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pembelian_pesulaps";

    protected $fillable = [
        'id_user',
        'id_pesulap',
        'tgl_pembelian',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pesulaps()
    {
        return $this->belongsTo(Pesulap::class, 'id_pesulap');
    }
}