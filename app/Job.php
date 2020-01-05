<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\City;
use App\Title;

class Job extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }
}
