<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use App\Models\Owner;
use App\Models\Car;


class Mechanic extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function carOwner():HasOneThrough
    {
        return $this->hasOneThrough(Owner::class,Car::class);
    }
}
