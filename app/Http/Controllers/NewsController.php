<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index', [
            'title' => 'Berita',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = News::select(['title', 'content', 'image', 'slug', 'is_published', 'published_at', 'id']);

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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Generate a unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;

        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        // Find existing news item if an ID is provided
        $news = News::find($request->id);

        // Handle image upload
        if ($request->hasFile('image')) {
            // If there is an old image, delete it
            if ($news && $news->image) {
                Storage::delete($news->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('public/news');
        } else {
            // If no new image is uploaded, keep the old one
            $imagePath = $news ? $news->image : null;
        }

        News::updateOrCreate([
            'id' => $request->id,
        ], [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'slug' => $slug,
            'is_published' => true,
            'published_at' => now(),
        ]);

        return [
            'message' => 'News saved successfully!',
        ];
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
    }
}
