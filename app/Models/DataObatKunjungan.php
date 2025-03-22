<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObatKunjungan extends Model
{
    protected $table = 'dataobatkunjungan';
    protected $primaryKey = 'obatkunjungan_id';
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'jumlah_obat',
    ];
}
