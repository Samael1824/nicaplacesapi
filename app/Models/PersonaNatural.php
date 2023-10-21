<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PersonaNatural extends Model
{
    use HasFactory;
    public function Persona(): HasOne
    {
        return $this->hasOne(Persona::class);
        
    }
    
}
