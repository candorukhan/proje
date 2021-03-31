<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ders;

class Ogrenci extends Model
{
    protected $table = 'ogrenci';
    protected $primaryKey = 'id';
    protected $guarded=[]; 
    
    // protected $fillable = [
    //     'deger',
    //     'tarih',
    // ];
    public $incrementing = true;
    public $timestamps = false;

    //  public function dersler()
    //  {
    //      //return Ders::where('ogrenci_numara' , $this->numara)->get();
    //      return $this->hasMany(Ders::class , 'ogrenci_numara' , 'numara');
    //  }
    //  public function dersler()
    //  {
    //      //return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ders_kodu' , 'ogrenci_numara' , '' , 'kodu' , 'numara');
    //      //return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ogrenci_numara' , 'ders_kodu' , 'numara' , 'kodu' , Ogrenci::class);
    //      return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ogrenci_numara' , 'ders_kodu' , 'numara' , 'kodu' , Ogrenci::class);


    //  }


    public function zorunluDersler()
    {
        return Ders::where('sinif' , $this->sinif)->where('zorunlumu' , 1)->get();
        //return $this->hasMany(Ders::class , 'ogrenci_numara' , 'numara');
    }
    



    public function secmeliDersler()
    {
        return $this->belongsToMany(Ders::class , 'ders_ogrenci' , 'ogrenci_numara' , 'ders_kodu' , 'numara' , 'kodu' , Ogrenci::class);
    }
}
