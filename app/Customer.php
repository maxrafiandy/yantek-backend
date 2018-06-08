<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public function jenisIrm() {
        return $this->belongsTo('App\JenisIrm');
    }

    public function penyelenggara() {
        return $this->belongsTo('App\Penyelenggara');
    }
}
