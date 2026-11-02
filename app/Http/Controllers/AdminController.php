<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function notAdmin(Request $request)
    {
        return ! $request->session()->get('is_admin');
    }

    public function loginForm()
    {
        return view('admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $password = config('mwf.admin_password');

        if ($password && hash_equals($password, $request->input('password'))) {
            $request->session()->regenerate();
            $request->session()->put('is_admin', true);

            return redirect('/admin');
        }

        return back()->withErrors(['password' => 'Wrong password. Please try again.']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');

        return redirect('/admin/login');
    }

    public function dashboard(Request $request)
    {
        if ($this->notAdmin($request)) {
            return redirect('/admin/login');
        }

        $events = Event::withCount('volunteers')->orderBy('event_date')->get();
        $volunteers = Volunteer::with('event')->latest()->get();

        return view('admin', [
            'events' => $events,
            'volunteers' => $volunteers,
        ]);
    }

    public function storeEvent(Request $request)
    {
        if ($this->notAdmin($request)) {
            return redirect('/admin/login');
        }

        $data = $request->validate([
            'title' => 'required|max:150',
            'event_date' => 'required|date',
            'event_time' => 'nullable|max:50',
            'location' => 'nullable|max:150',
            'description' => 'nullable|max:1000',
        ]);

        Event::create($data);

        return redirect('/admin')->with('success', 'Event added.');
    }

    public function deleteEvent(Request $request, Event $event)
    {
        if ($this->notAdmin($request)) {
            return redirect('/admin/login');
        }

        $event->delete();

        return redirect('/admin')->with('success', 'Event deleted.');
    }

    public function deleteVolunteer(Request $request, Volunteer $volunteer)
    {
        if ($this->notAdmin($request)) {
            return redirect('/admin/login');
        }

        $volunteer->delete();

        return redirect('/admin')->with('success', 'Volunteer removed.');
    }
}
