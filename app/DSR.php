<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DSR extends Model
{
    protected $table = 'd_s_rs';
    protected $fillable = ['form', 'to', 'bank_id'];


    public function banks()
    {
        return $this->hasMany('App\Bank');
    }
}
