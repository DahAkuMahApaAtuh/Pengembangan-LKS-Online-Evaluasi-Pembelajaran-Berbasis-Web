<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Test;
use App\Models\Option;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
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
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
