<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display an event reservations.
     *
     * @return \Illuminate\Http\Response
     */
    public function byEventId($eventId)
    {
        return Reservation::byEventId($eventId)->get();
    }

    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, [
            'company' => 'required|max:255',
            'admin' => 'required|email|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'logo_img' => 'required|max:255',
            'marketing_docs' => 'required|max:255',
            'stand_id' => 'required|integer',
        ]);

        // Load reservation data.
        $reservation = new Reservation();
        $reservation->company = $request->company;
        $reservation->admin = $request->admin;
        $reservation->address = $request->address;
        $reservation->phone = $request->phone;
        $reservation->logo_img = $request->logo_img;
        $reservation->marketing_docs = $request->marketing_docs;
        $reservation->stand_id = $request->stand_id;

        // Save reservation to db.
        $reservation->save();

        // Return saved reservation.
        return $reservation;
    }

    /**
     * Store an uploaded file.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function uploadFile(Request $request) {
        // Check the correct folder for the upload file.
        if ($request->file('logo_img')) {
            $path = $request->file('logo_img')->store('public/company-logos');
        } else {
            $path = $request->file('marketing_docs')->store('public/marketing-docs');
        }

        return $path;
    }
}
