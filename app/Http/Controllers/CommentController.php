<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Forum;

class CommentController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        $comments = Comment::all();
        return view('comments.index', compact('comments', 'forums'));
    }
    public function create($forumId)
    {
        $forum = Forum::find($forumId);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        return view('comments.create', ['forum' => $forum]);
    }

    public function store(Request $request, $forumId)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $forum = Forum::find($forumId);

        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->forum_id = $forum->id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }

    public function edit($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        return view('comments.edit')->with('comment', $comment);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->route('comments.index', $comment->forum_id)->with('success', 'Comment updated successfully');
    }

    public function delete($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}