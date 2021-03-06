<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Test;
use App\Models\Response;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nis',
        'name',
        'score'
    ];

    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function tests()
    {
        return $this->belongsToMany(Test::class);
    }
    
    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function answers()
    {
        return $this->belongsToMany(Response::class);
    }
}
