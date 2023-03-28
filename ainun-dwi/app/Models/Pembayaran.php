<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [  
        'user_id',
        'user_id',
        'spp_id',
        'tanggal_bayar',
        'jumlah_bayar',
    ];
    public function siswa()
    {
        return $this->BelongsTo(Siswa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function spp()
    {
        return $this->belongsTo(SPP::class);
    }
}
