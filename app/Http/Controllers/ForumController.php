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

        Forum::create($request->post());

        return redirect()->route('formus.index')->with('success','forum has been created successfully.');
    }

    public function show(Forum $forum)
    {
        return view('forums.show',compact('forum'));
    }

    public function edit(Forum $forum)
    {
        return view('forums.edit',compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_name' => 'required',
            'comments' => 'required',
        ]);

        $forum->fill($request->post())->save();

        return redirect()->route('forums.index')->with('success','Forum Has Been updated successfully');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();
        return redirect()->route('forums.index')->with('success','Forum has been deleted successfully');
    }
}