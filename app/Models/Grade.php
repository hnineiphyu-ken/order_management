<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillables = ['name'];    

    public function users(){
    	return $this->hasMany('App\Models\User');
    }

    public function products(){
    	return $this->hasMany('App\Models\Product');
    }
}
