<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function banner(){
        return $this->hasOne(Banner::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
