<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Cars;
class Owner extends Model
{
    use HasFactory;
    protected $table = 'owner';
    protected $fillable = [
        'name',
       
    
    ];
    public function cars()
    {
        return $this->hasOne(Cars::class,);
    }
}
