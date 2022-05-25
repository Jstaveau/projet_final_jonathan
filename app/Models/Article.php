<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function image(){
        return $this->hasOne(Image::class);
    }
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
}
