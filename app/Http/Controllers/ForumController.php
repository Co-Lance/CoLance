<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
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
        $comments = Comment::all();
        return view('forums.create', ['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $forum = Forum::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Attach comments to the forum
        if ($request->has('comments')) {
            $commentsData = $request->input('comments');

            foreach ($commentsData as $commentData) {
                $comment = new Comment();
                $comment->content = $commentData;
                $forum->comments()->save($comment);
            }
        }

        return redirect()->route('forums.index')->with('success', 'Forum added successfully!');
    }

    public function edit($id)
    {
        $forum = Forum::with('comments')->find($id);
        $comments = Comment::all();

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        return view('forums.edit',['forum'=>$forum],['comments' => $comments]);
    }

    public function update(Request $request, $id)
    {
        $forum = Forum::findOrFail($id);

        // Update the forum with the new data
        $forum->title = $request->input('title');
        $forum->description = $request->input('description');
        // Update any other fields you want to modify
        $forum->save();

        // Redirect to the appropriate route after updating the forum
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
