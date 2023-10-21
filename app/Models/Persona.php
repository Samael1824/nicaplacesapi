<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Persona extends Model
{
    public function PersonaNatural(): HasOne
    {
        return $this->hasOne(PersonaNatural::class);
    }

}
