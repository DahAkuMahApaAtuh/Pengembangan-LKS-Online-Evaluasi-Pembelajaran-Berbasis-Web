<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Student;

class Test extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'duration',
        'end_date'
    ];
    
    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
