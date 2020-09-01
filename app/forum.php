<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{

    
    /*relasi m to m tabel forums dan tags*/
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /*relasi tabel forum dan user*/
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
