<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postComment($id, Request $rq){
        $product = Product::find($id);

        $comment = new Comment;
        $comment->product_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $rq->comment;
        $comment->save();

        return redirect()->back()->with('thongbao', 'Bình luận thành công');
    }
}
