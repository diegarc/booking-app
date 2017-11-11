<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all();
    }

    /**
     * Display the specified event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the event with stands and reservations.
        $event = Event::with('stands')->with('stands.reservation')->findOrFail($id);

        // Get the map image url.
        $event->map_img = Storage::url($event->map_img);

        foreach ($event->stands as $stand) {
            // Get each stand image url.
            $stand->img = Storage::url($stand->img);

            // Check if the stand is reserved.
            if ($stand->reservation) {
                // Get the logo and marketing docs url.
                $stand->reservation->logo_img = Storage::url($stand->reservation->logo_img);
                $stand->reservation->marketing_docs = Storage::url($stand->reservation->marketing_docs);
            }
        }

        return $event;
    }
}
