<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Person;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = ['person_id','city'];

    public function person():BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}

