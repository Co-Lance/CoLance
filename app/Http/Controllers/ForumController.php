<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'comments' => 'required',
        ]);

        $forum = new Forum();
        $forum->title = $request->input('title');
        $forum->description = $request->input('description');
        $forum->comments = $request->input('comments');
        // $forum->user_name = Auth::user()->name; // Set the current user's name
        $forum->save();

        return redirect()->route('forums.index')->with('success', 'Forum has been created successfully.');
    }




    public function edit($id)
    {
        $forum = Forum::find($id);

    if (!$forum) {
        return response()->json(['message' => 'forum not found'], 404);
    }

    // You can load a view to edit the forum and pass the forum data to the view
    return view('forum.edit')->with('forum', $forum);
    }

    public function update(Request $request, Forum $forum)
    {
        // $this->authorize('update', $forum);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'comments' => 'required',
        ]);

        $forum->title = $request->input('title');
        $forum->description = $request->input('description');
        $forum->comments = $request->input('comments');
        $forum->save();

        return redirect()->route('forums.index')->with('success', 'Forum updated successfully!');
    }

    public function delete($id)
    {
        $forum = Forum::find($id);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        // // Check if the current user is the owner of the forum
        // if ($forum->user_name !== Auth::user()->name) {
        //     return response()->json(['message' => 'Unauthorized'], 401);
        // }

        $forum->delete();

        return redirect()->back()->with('success', 'Forum deleted successfully');
    }

    public function comment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $forum = Forum::find($id);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        $comment = new Comment();
        $comment->user_name = Auth::user()->name; // Set the current user's name
        $comment->content = $request->input('content');
        $forum->comments()->save($comment);

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}