<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    protected $table = 'datapasien';
    protected $primaryKey = 'pasien_id';
    public $timestamps = true;
    use HasFactory;
    protected $fillable = [
        'nama_pasien',
        'tanggal_lahir',
        'usia',
        'no_hp',
        'NIK'
    ];
}
