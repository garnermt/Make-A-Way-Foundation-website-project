<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class GetInvolvedController extends Controller
{
    public function index()
    {
        $events = Event::where('event_date', '>=', now()->toDateString())
            ->orderBy('event_date')
            ->get();

        return view('get-involved', ['events' => $events]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|max:30',
            'event_id' => 'nullable|exists:events,id',
            'group_size' => 'required|integer|min:1|max:50',
            'photo_waiver' => 'required|in:0,1',
            'attended_before' => 'required|in:0,1',
            'residence' => 'required|in:Athens,Limestone County,Madison,Huntsville,Hartselle,Decatur',
            'heard_about' => 'required|in:Social Media,E-mail,Family/Friend,School,Poster',
            'dietary_needs' => 'nullable|max:500',
            'message' => 'nullable|max:1000',
            'website' => 'nullable|max:0',
        ]);

        Volunteer::create($data);

        return redirect('/get-involved#volunteer')
            ->with('success', 'Thank you for registering! We will be in touch soon.');
    }
}