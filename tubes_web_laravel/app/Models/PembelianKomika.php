<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianKomika extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $table = "pembelian_komikas";

    protected $fillable = [
        'id_user',
        'tgl_pembelian',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function komika()
    {
        return $this->belongsTo(Komika::class, 'id_komika');
    }
}