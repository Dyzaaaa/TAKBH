<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $table = 'dataobat';
    protected $primaryKey = 'obat_id';
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'nama_obat',
        'jumlah_stok',
        'harga_jual',
        'harga_beli',
    ];
}
