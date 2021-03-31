<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ders extends Model
{
    protected $table = 'ders';
    protected $primaryKey = 'id';
    protected $guarded=[];
    public $incrementing = true;
    public $timestamps = false;

    // public function ogrenciler()
    // {
        
    //     return $this->belongsToMany('App\Models\Ogrenci');
    // }
    public function ogrenciler()
     {
         //return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ders_kodu' , 'ogrenci_numara' , '' , 'kodu' , 'numara');
         //return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ogrenci_numara' , 'ders_kodu' , 'numara' , 'kodu' , Ogrenci::class);
         return $this->belongsToMany(Ogrenci::class , 'ders_ogrenci' , 'ders_kodu' , 'ogrenci_numara' , 'kodu' , 'numara' , Ders::class);


     }
}
