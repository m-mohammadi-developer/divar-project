<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advers extends Model
{
    // 
    protected $fillable = [
        'name', 'description', 'price',	'user_id', 'category_id', 'is_confirmed',
    ];
    

}
