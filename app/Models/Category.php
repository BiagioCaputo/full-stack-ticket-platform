<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Ogni categoria può avere più tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
