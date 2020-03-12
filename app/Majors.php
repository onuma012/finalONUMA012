<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{

    protected $table = 'majors'; //ชื่อตารางฐานข้อมูล
    protected $fillable = ['major_id','major_mane','fac_id']; //ชื่อตารางในฐานข้อมูล
}
