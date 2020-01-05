<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job; 

class City extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
