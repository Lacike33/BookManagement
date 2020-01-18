<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','genre_id','description','pages','year'];

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
