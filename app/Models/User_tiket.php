<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_tiket extends Model
{
    use HasFactory;

    protected $table = 'user_tikets';
    protected $fillable = [
        'nama',
        'email',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'tanggal_kedatangan',
        'jumlah_tiket',
        'harga',
        'status',
        'batal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
