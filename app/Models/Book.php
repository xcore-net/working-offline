<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Author;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title','description','pages','author_id'];

    public function author():BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
   
}
