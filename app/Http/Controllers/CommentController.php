<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function edit($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        // Check if the current user is the owner of the comment
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        // Find the comment by its ID
        $comment = Comment::findOrFail($id);

        // Check if the current user is the owner of the comment
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Update the comment with the new data
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->route('forums.show', $comment->forum_id)->with('success', 'Comment updated successfully!');
    }

    public function delete($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        // Check if the current user is the owner of the comment
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $forumId = $comment->forum_id; // Store the forum ID before deleting the comment
        $comment->delete();

        return redirect()->route('forums.show', $forumId)->with('success', 'Comment deleted successfully');
    }
}