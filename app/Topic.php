<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $fillable = [
        'nama_topic'
    ];

    public function pekerjaans()
    {
        return $this->hasMany('App\pekerjaan');
    }
}
