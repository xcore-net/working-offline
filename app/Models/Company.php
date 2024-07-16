<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Company extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasManyThrough(Employee::class, Branch::class);
    }

    public function branches():HasMany
    {
        return $this->hasMany(Branch::class);
    }

}
