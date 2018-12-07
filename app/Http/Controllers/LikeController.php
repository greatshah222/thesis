<?php

namespace App\Http\Controllers;

use App\ForumModel\Like;
use Illuminate\Http\Request;
use App\ForumModel\Reply;


class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT');
    }
    public function likeIt(Reply $reply)
    {

        $reply->like()->create([
            'user_id' => '1'
        ]);
    }
    public function unLikeIt(Reply $reply)
    {
        $reply->like()->where('user_id', '1')->first()->delete();

    }



}