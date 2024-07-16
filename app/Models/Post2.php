<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Comments;

class Post2 extends Model
{
    use HasFactory;
    protected $table = 'post2s';
    protected $fillable = [
        'title',
        'body',
    
    ];

    public function comments(): MorphMany
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
