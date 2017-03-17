<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['name'];

    public function dsr()
    {
        return $this->belongsTo('App\DSR');
    }
}
