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

    public function battery_type()
    {
        return $this->belongsTo(BatteryType::class);
    }

    public function gear_box()
    {
        return $this->belongsTo(GearBox::class);
    }

    public function volt()
    {
        return $this->belongsTo(Volts::class);
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }
}
