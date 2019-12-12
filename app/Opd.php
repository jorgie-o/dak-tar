<?php

namespace App;

use App\Patient;
use App\Pharmacy;
use App\Labaratory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function labs()
    {
        return $this->hasMany(Labaratory::class);
    }

    public function pharmacy()
    {
        return $this->hasMany(Pharmacy::class);
    }
}
