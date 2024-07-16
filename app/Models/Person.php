<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Cards;

use App\Models\Posts;

class Person extends Model
{
    use HasFactory;
    protected $table = 'person';
    protected $fillable = [
        'name',
        'card',
    
    ];
    public function cards():HasOne
    {
        return $this->hasOne(Cards::class)->ofMany('id', 'max');
    
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class,'pe_id','id');
    }

}
