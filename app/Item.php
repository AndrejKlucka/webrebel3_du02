<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = ['text'];

    public function getCreatedAtAttribute($value)
    {
    	return date('j M Y, G:i', strtotime($value));
    }   
}
