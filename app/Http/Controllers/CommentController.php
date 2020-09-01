<?php

namespace App\Http\Controllers;

use App\Comment;
use App\forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment (Request $request, forum $forum)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;

        $forum->comments()->save($comment);

        return back()->withInfo('Komentar terkirim');
    }

   
}
