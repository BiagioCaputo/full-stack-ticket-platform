<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //Ogni ticket può avere una sola categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
