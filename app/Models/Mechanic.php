<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Cars;

use App\Models\Owner;


class Mechanic extends Model
{
    use HasFactory;
    protected $table = 'mechanic';
    protected $fillable = [
        'name',
 
    ];
    public function cars()
    {
        return $this->belongsTo(Cars::class,);
    }

    public function carOwner(): HasOneThrough
    {
        return $this->hasOneThrough(Owner::class, Cars::class);
    }
}
