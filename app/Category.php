<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'title', 'id'
    ];



    public function adverses() {
        return $this->hasMany('App\Advers');
    }

}
