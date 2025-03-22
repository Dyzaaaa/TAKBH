<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';
    protected $primaryKey = 'order_id';
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'nama_obat',
        'jumlah_obat',
        'harga_jual',
        'total_harga',
    ];
}
