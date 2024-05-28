<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Akun extends Model
{
    use HasFactory;

    protected $table = 'akun';

    protected $primaryKey = 'id_akun';

    protected $guarded = ['id_akun'];

    protected $hidden = [
        'password',
        'remember_token',
        'token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pesanan() {
        return $this->hasMany(Pesanan::class, 'id_akun', 'id_akun'); // Sesuaikan dengan foreign key yang digunakan pada tabel pesanan
    }

}
