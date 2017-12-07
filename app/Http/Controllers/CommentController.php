<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create([
            'user_id' => $request->user_id,
            'target_id' => $request->target_id,
            'content' => $request->content,
            'target_type' => $request->type,
        ]);

        return view('userpage.comment_respon', compact('comment'))->render();
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->id);
        $comment->delete();

        return '';
    }
}
