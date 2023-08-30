<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=["main_image","main_image_url"];

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id");
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class,"created_by");
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,"product_id");
    }

    public function getMainImageAttribute()
    {
        $main_image=$this->images->filter(function($image){
            return $image->is_main==1;
        })->first();

        return $main_image ? $main_image->image : null;
    }

    public function getMainImageUrlAttribute()
    {
        return $this->main_image ? Storage::url($this->main_image) : null;
    }
}
