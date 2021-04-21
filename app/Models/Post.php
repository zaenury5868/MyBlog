<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'category_id', 'content', 'gambar'];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}