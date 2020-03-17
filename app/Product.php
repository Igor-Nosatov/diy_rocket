<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

        protected $table = 'products';

        protected $fillable = [ 'name', 'image1', 'image2','image3',
        'image4',
        'price',
        'category_id',
        'brand_id',
        'battery_type_id',
        'gear_box_id',
        'volt_id',
        'weight_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
