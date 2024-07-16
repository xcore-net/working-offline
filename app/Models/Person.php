<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Adress;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = ['name'];

    public function adress():HasOne
    {
        return $this->hasOne(Adress::class);
    }
}
