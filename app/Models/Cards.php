<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Person;

class Cards extends Model
{
    use HasFactory;
    protected $table = 'cards';
    protected $fillable = [
        'name',
        'person_id',
    
    ];
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }


}
