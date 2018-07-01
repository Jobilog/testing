<?php

namespace App;
use App\Request;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    protected $table = 'request'; //name of 'table'
    protected $fillable = ['name','email','phone','address','company','city','transaction','mode','contype','weight','height','width','length','quantity','commodity','con_name','con_add','con_phone','con_country','con_email'];
}
