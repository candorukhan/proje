<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinif extends Model
{
    protected $table = 'sinif';
    protected $primaryKey = 'id';
    protected $guarded=[]; 
    public $incrementing = true;
    public $timestamps = false;
}
