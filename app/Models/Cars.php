<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Owner;
use App\Models\Mechanic;


class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'model',
       
    
    ];
    public function mechanic()
    {
        return $this->hasOne(Mechanic::class,);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class,);
    }
}
