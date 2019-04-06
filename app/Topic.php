<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $table = "tb_topic";


    protected $fillable = [
        'nama_topic'
    ];

    public $timestamps = false;
}
