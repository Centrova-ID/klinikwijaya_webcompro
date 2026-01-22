<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user')->latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published'
        ]);

        $validated['user_id'] = Auth::id();
        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/events'), $filename);
            $validated['featured_image'] = 'uploads/events/' . $filename;
        }

        Event::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil dibuat!');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published'
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($event->featured_image && file_exists(public_path($event->featured_image))) {
                unlink(public_path($event->featured_image));
            }

            $image = $request->file('featured_image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/events'), $filename);
            $validated['featured_image'] = 'uploads/events/' . $filename;
        }

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil diupdate!');
    }

    public function destroy(Event $event)
    {
        // Delete image if exists
        if ($event->featured_image && file_exists(public_path($event->featured_image))) {
            unlink(public_path($event->featured_image));
        }

        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil dihapus!');
    }
}
