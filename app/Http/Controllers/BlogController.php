<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $blogs = Blog::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(5);

        return view('blogs.index', compact('blogs'));
    }

    public function trashed(Request $request)
    {
        $search = $request->get('search');

        $query = Blog::onlyTrashed();

        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $blogs = $query
            ->latest('deleted_at')
            ->paginate(5);

        return view('blogs.trashed', compact('blogs'));
    }


    public function restore($id)
    {
        $blog = Blog::onlyTrashed()->findOrFail($id);
        $blog->restore();

        return redirect()->route('blogs.index')->with('success', 'Blog restored successfully.');
    }

    public function forceDelete($id)
    {
        $blog = Blog::onlyTrashed()->findOrFail($id);
        $blog->forceDelete();

        return redirect()->route('blogs.trashed')->with('success', 'Blog permanently deleted successfully.');
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}


