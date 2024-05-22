<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','status','category_id'
    ];

    //Ogni ticket può avere una sola categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Un ticket può avere più operatori
    public function operators()
    {
        return $this->hasMany(Operator::class);
    }
}
