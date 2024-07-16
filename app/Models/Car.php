<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Owner;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['model','mechanic_id'];

    public function owner():HasMany
    {
        return $this->hasMany(Owner::class);
    }
}
