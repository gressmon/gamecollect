<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    protected $fillable = ['code', 'name'];

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
