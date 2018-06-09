<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SbuProvinsi extends Model
{
    protected $table = 'sbu_provinsi';

    public function sbuKabupaten()
    {
        return $this->hasMany('App\SbuKabupaten');
    }
}
