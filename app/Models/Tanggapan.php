<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'pengaduan_id', 'tgltanggapan', 'tanggapan'];
    protected $table = 'tanggapan';
    // Nilai balik relasi ke tabel pengaduan
    public function pengaduan()
    {
        return $this->belongsTo('pengaduan', 'pengaduan_id', 'id');
    }
    //nilai balik relasi ke tabel user
    public function user()
    {
        return $this->belongsTo('users', 'users_id', 'id');
    }
}
