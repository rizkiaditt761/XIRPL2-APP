<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'namakategori', 'deskripsi'
    ];
    protected $table = 'kategoripengaduan';
    //relasi -> table pengaduan
    public function pengaduan()
    {
        return $this->hasMany('pengaduan', 'kategori_id', 'id');
    }
}
