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
            'message' => 'nullable|max:1000',
            'website' => 'nullable|max:0',
        ]);

        Volunteer::create($data);

        return redirect('/get-involved#volunteer')
            ->with('success', 'Thank you for signing up! We will be in touch soon.');
    }
}
