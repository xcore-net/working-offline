<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Accountant extends Model
{
    use HasFactory;

    public function saleman(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
