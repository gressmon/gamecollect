<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['code', 'name'];

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
