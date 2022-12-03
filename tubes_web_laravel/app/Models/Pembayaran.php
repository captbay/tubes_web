<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pembayarans";

    protected $fillable = [
        'id_user',
        'metode_pembayaran',
        'total_bayar',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}