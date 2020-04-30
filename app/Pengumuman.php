<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillable=[
     'judul','isi', 'users_id', 'kategori_pengumuman_id'
    ];

    public function kategoriPengumuman(){
        return $this->belongsTo(\App\KategoriPengumuman::class, 'users_id', 'id');
    }
}