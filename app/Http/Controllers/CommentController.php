<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required',
        ]);

            $input = $request->all();

            $input['user_id'] = auth()->user()->id;
            Comment::create($input);
            return redirect()->to(url()->previous() . '#comment-box');
    }
}
