<?php

namespace App\Http\Controllers;

use App\Mail\EventReport;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store an event visits resources in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeEvent(Request $request) {

        // Validate data
        $this->validate($request, [
            'reservations.*.visits.users' => 'required|integer',
            'reservations.*.visits.males' => 'required|integer',
            'reservations.*.visits.females' => 'required|integer',
            'reservations.*.visits.under18' => 'required|integer',
            'reservations.*.visits.between1830' => 'required|integer',
            'reservations.*.visits.between3150' => 'required|integer',
            'reservations.*.visits.over50' => 'required|integer',
            'reservations.*.visits.reservation_id' => 'required|integer'
        ]);

        // For each reservation...
        foreach ($request->reservations as $reservation) {

            // If visits exists, get the resource or create a new one.
            if (isset($reservation['visits']['id'])) {
                $visit = Visit::find($reservation['visits']['id']);
            } else {
                $visit = new Visit();
            }

            // Load visits data.
            $visit->users = $reservation['visits']['users'];
            $visit->males = $reservation['visits']['males'];
            $visit->females = $reservation['visits']['females'];
            $visit->under18 = $reservation['visits']['under18'];
            $visit->between1830 = $reservation['visits']['between1830'];
            $visit->between3150 = $reservation['visits']['between3150'];
            $visit->over50 = $reservation['visits']['over50'];
            $visit->reservation_id = $reservation['visits']['reservation_id'];

            // Save visit to db.
            $visit->save();

            // Sending report mail.
            Mail::to($reservation['admin'])->send(new EventReport($visit));
        }

        // Return saved visits.
        return $request->reservations;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Visit::find($id);
    }
}
