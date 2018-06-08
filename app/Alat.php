<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    public function jenisAlat()
    {
        return $this->belongsTo('App\JenisAlat');
    }
}
