<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    /**
     * Get the reservation associated with the stand.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reservation() {
        return $this->hasOne('App\Models\Reservation');
    }
}
