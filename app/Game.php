<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name','user_id','console_id','region_id','state_id','completion_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function region()
    {
        return $this->hasOne('App\Region');
    }

    public function console()
    {
        return $this->hasOne('App\Console');
    }

    public function state()
    {
        return $this->hasOne('App\State');
    }

    public function completion()
    {
        return $this->hasOne('App\completion');
    }
}
