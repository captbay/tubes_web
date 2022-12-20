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

    public function pembeliankomikas()
    {
        return $this->hasMany(PembelianKomika::class,  'id_komika', 'id');
    }

    protected $fillable = [
        'Nama',
        'Harga',
        'Image',
        'Deskripsi',
    ];
}