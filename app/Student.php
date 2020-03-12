<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
 protected $table = 'student'; //ชื่อตารางฐานข้อมูล
 protected $fillable = ['Full texts','stu_pre','stu_fname','stu_lname','stu_code','stu_group_id','major_id']; //ชื่อตารางในฐานข้อมูล
}
