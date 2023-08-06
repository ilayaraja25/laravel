<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staffs';
   protected $primarykey='id';
    protected $fillable=['Name','Address','Department','Phone_Number','Gender','Blood_group'];
}
