<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user')
            ->where('status', 'published')
            ->latest('event_date')
            ->paginate(12);
            
        $upcomingEvents = Event::with('user')
            ->where('status', 'published')
            ->where('event_date', '>=', now())
            ->orderBy('event_date', 'asc')
            ->take(3)
            ->get();
            
        return view('about.event.index', compact('events', 'upcomingEvents'));
    }

    public function show($slug)
    {
        $event = Event::with('user')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
            
        $relatedEvents = Event::with('user')
            ->where('status', 'published')
            ->where('id', '!=', $event->id)
            ->latest('event_date')
            ->take(3)
            ->get();
            
        return view('about.event.show', compact('event', 'relatedEvents'));
    }
}
