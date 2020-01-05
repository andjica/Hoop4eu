<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Title extends Model
{
    protected $guarded = [];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
