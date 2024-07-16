<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Image;

class Sender extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function image():MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
