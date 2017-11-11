<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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

        $reservations = $request->reservations;
        foreach ($reservations as &$reservation) {

            if (isset($reservation['visits']['id'])) {
                $visit = Visit::find($reservation['visits']['id']);
            } else {
                $visit = new Visit();
            }

            // Load visit data.
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

            $reservation['visits']['id'] = $visit->id;
        }

        // Return saved visits.
        return $reservations;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
