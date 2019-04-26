<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        Comment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'body' => $request->input('body'),
            'post_id' => $request->input('post_id'),
        ]);

        return back()->with('success', 'Comment Added Successfully!');
    }
}
