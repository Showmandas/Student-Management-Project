<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='students';
    protected $fillable=['cne','firstName','secondName','age','speciality'];
    public $timestamps=false;
}
