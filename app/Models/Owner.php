<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = ['name','car_id'];

    public function car():BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
