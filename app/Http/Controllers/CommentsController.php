<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{
    public function store(Request $comment)
    {
        Comments::insert([
            'comment_id' => $comment->comment_id,
            'request_id' => $comment->request_id,
            'comment'=> $comment->comment,
            'user_name' => $comment->user_name,
        ]);

        return redirect()->back();
    }
}
