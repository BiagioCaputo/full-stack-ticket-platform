<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    //Ogni operatore ha un solo ticket per volta
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
