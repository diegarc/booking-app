<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the stands for the event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stands() {
        return $this->hasMany('App\Models\Stand');
    }
}
