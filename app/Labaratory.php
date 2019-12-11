<?php

namespace App;

use App\Opd;
use App\Patient;
use Illuminate\Database\Eloquent\Model;

class Labaratory extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
