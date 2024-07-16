<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Course;
use App\Models\CourseStudent;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','age','paid','last_name'];
    
    protected function casts()
    {
        return [
            'paid' => 'decimal:3'
        ];
    }

    public function course():BelongsToMany
    {
        return $this->belongsToMany(Course::class)->using(CourseStudent::class);
    }
    public function getPaidAttribute($value)
    {
        return '$' . number_format($value, 5);
    }
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = strtolower($value);
    }
}
