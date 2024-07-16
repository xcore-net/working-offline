<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Str;

class Employee extends Model
{
    use HasFactory;

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }


    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }
    public function reports(): MorphMany
    {
        return $this->morphMany(AnnualReport::class, 'reportable');
    }

    protected function salary(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Str::start($value,'$'),
        );
    }

    

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'salary'=> 'double',
        ];
    }
}
