<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultys extends Model
{
    protected $table = 'facultys'; //ชื่อตารางฐานข้อมูล
    protected $fillable = ['fac_id','fac_name','id']; //ชื่อตารางในฐานข้อมูล
}
