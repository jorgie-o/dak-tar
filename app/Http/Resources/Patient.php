<?php

namespace App\Http\Resources;

use App\Opd;
use Illuminate\Http\Resources\Json\JsonResource;

class Patient extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'patient_id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'gender' => $this->gender,
            'contact' => $this->contact,
            'address' => $this->address,
            'created_at' => $this->created_at,
            'opd' => Opd::find($this->id)
        ];
    }
}
