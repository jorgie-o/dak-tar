<?php

namespace App;

use App\Opd;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function ops()
    {
        return $this->hasMany(Opd::class);
    }
    public function getNameAttribute()
    {
        return $this->first_name . ' '. $this->last_name;
    }
}
