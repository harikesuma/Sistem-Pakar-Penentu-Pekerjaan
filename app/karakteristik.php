<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karakteristik extends Model
{
    
    protected $fillable = ['karakter'];
    
    public function pekerjaan()
    {
        return $this->belongsToMany('App\pekerjaan','pekerjaans_karakteristiks','pekerjaan_id','karakteristik_id');
    }

    
}
