<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.event.index', [
            'title' => 'Event',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = Event::all();
        return DataTables::of($news)
            ->addColumn('aksi', function ($row) {

                $btn = '<button class="edit btn btn-primary btn-sm">Edit</button>';
                $btn .= '<button class="delete btn btn-danger btn-sm"data-id="' . $row->id . '" >Delete</button>';
                return $btn;
            })
            ->editColumn('image', function ($row) {
                return str_replace('public/', 'storage/', $row->image);
            })
            ->editColumn('is_published', function ($row) {
                return $row->is_published ? 'Yes' : 'No';
            })
            ->rawColumns(['aksi', 'image'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        // Generate a unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;

        while (Event::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        // Find existing Event item if an ID is provided
        $event = Event::find($request->id);

        // Handle image upload
        if ($request->hasFile('image')) {
            // If there is an old image, delete it
            if ($event && $event->image) {
                Storage::delete($event->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('public/images/events');
        } else {
            // If no new image is uploaded, keep the old one
            $imagePath = $event ? $event->image : null;
        }

        // Update or create the Event
        $event = Event::updateOrCreate(
            ['id' => $request->id],
            array_merge(
                $request->validated(),
                [
                    'slug' => $slug, // Use the unique slug generated
                    'is_published' => true,
                    'published_at' => now(),
                    'image' => $imagePath,
                ]
            )
        );

        return response()->json([
            'message' => 'Event created successfully',
            'data' => $event,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json([
            'message' => 'Event deleted successfully',
        ]);
    }
}
