<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name','description'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
