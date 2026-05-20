<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = ['masyarakat_id', 'kategori_id','tglpengaduan', 'isilaporan', 'foto', 'status'];
    protected $table = 'pengaduan';

    // nilai balik relasi ke tabel kategori pengaduan
    public function kategoripengaduan()
    {
        return $this->belongsTo('kategoripengaduan', 'kategori_id', 'id');
    }
    // Reelasi -> Tanggapan
    public function tanggapan()
    {
        return $this->hasMany('tanggapan', 'pengaduan_id', 'id');
    }
    // nilai balik relasi ke tabel user
    public function user()
    {
        return $this->belongsTo('user', 'masyarakat_id', 'id');
    }
}
