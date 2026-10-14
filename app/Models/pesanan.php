<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PesananFactory> */
    use HasFactory;

    protected $fillable = [
        'id', 'menu_id', 'nama_pelanggan', 'nomor_meja', 'jumlah', 'total_harga', 'status',
    ];
}
