<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forums.index', compact('forums'));
    }

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_name' => 'required',
            'comments' => 'required',
        ]);

        Forum::create($request->all());

        return redirect()->route('forums.index')->with('success', 'Forum has been created successfully.');
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    public function edit($id)
    {
        $forum = Forum::find($id);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        return view('forums.edit', compact('forum'));
    }

    public function update(Request $request, $id)
    {
        // Find the forum by its ID
        $forum = Forum::findOrFail($id);

        // Update the forum with the new data
        $forum->update([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_name' => $request->input('user_name'),
            'comments' => $request->input('comments'),
        ]);

        return redirect()->route('forums.index')->with('success', 'Forum updated successfully!');
    }

    public function delete($id)
    {
        $forum = Forum::find($id);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        $forum->delete();

        return redirect()->back()->with('success', 'Forum deleted successfully');
    }
}