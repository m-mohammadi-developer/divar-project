<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advers extends Model
{
    // 
    protected $fillable = [
        'name', 'description', 'price',	'user_id', 'category_id', 'is_confirmed',
    ];
    


    // public function adverses(){
    //     return Advers::all();
    // }

    // public function adversByUserId($user_id) {
    //     return Advers::where('user_id', $user_id)->all();
    // }



}
