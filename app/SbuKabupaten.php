<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SbuKabupaten extends Model
{
    protected $table = 'sbu_kabupaten';

    public function sbuProvinsi()
    {
        return $this->belongsTo('App\SbuProvinsi');
    }
}
