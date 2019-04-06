<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    protected $fillable = ['pekerjaan','image','topik_id','label','deskripsi'];

    public function karakteristik()
    {
        return $this->belongsToMany('App\karakteristik','pekerjaans_karakteristiks','pekerjaan_id','karakteristik_id');
    }
}
