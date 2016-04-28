<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['code'];

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }

}
