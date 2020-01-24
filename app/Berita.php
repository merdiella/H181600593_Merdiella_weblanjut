<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';

    protected $fillable=[
     'judul','isi','users_id','kategori_berita_id'
    ];

    public function kategoriBerita(){
        return $this->belongsTo(\App\KategoriBerita::class,'users_id','id');
    }
    
}
