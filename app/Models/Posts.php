<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    
    protected $fillable = [
        'title',
        'content',
    
    ];
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class,);
    }

}
