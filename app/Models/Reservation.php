<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * Get the visits record associated with the reservation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function visits() {
        return $this->hasOne('App\Models\Visit');
    }

    /**
     * Get the stand that owns the reservation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stand() {
        return $this->belongsTo('App\Models\Stand');
    }

    /**
     * Scope a query to only include an event reservations.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $eventId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByEventId($query, $eventId) {
        $query->with('visits');
        return $query->whereHas('stand', function($query) use ($eventId) {
            $query->where('event_id', $eventId);
        });
    }
}
