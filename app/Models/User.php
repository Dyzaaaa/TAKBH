<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // Menambahkan properti role untuk mengakses peran pengguna
    protected $fillable = ['username', 'password', 'role'];

    // Cek apakah user adalah dokter
    public function isDokter()
    {
        return $this->role === 'dokter';
    }

    // Cek apakah user adalah apoteker
    public function isApoteker()
    {
        return $this->role === 'apoteker';
    }
}
