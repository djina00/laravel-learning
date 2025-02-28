<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBlog extends Model
{
    use HasFactory;

    //if we doesnt name model like table (Blog - create_blogs_table) we must declare it like below
    protected $table = "blogs";

    function scopeActive($query){
        return $query->where('status', 1);
    }

    function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
