<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $fillable = [
        'name',
        'img',
        'description',
        'price',
        'is_visible',
        'slug',
        'restaurant_id',
    ];

    public function orders() {
        return $this->belongsToMany('App\Order');
    }

    public function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }

    public function getImagePathAttribute()
    {
        if (filter_var($this->img, FILTER_VALIDATE_URL))
            return $this->img;
        return $this->img ? asset('images/' . $this->img) : null;
    }
}
