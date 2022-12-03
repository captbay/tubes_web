<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pembelians";

    protected $fillable = [
        'id_user',
        'id_band',
        'id_pesulap',
        'id_komika',
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

    public function pesulap()
    {
        return $this->belongsTo(Pesulap::class, 'id_pesulap');
    }

    public function komika()
    {
        return $this->belongsTo(Komika::class, 'id_komika');
    }
}