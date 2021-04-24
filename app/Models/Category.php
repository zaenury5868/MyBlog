<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name', 'slug'];
    public function posts(){
    	return $this->hasMany('App\Models\Post');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}