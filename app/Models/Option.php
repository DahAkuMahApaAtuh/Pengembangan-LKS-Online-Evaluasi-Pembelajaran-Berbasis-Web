<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Student;

class Option extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id',
        'text',
        'is_answer'
    ];

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo (Question::class);
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
