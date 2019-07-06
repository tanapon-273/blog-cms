<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable=['title','description','content','image'];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function deleteImage(){
    	Storage::delete($this->iamge);
    }
}
