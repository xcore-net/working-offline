<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'name',
        'class',
    
    ];
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class,'classes');
    }
}
