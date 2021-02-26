<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Livelink;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Upcoming event Notification
        $notification = Notification::all()->last();
        //Live streaming key
        $live = Livelink::all()->last();
        // add date format to value and hide during devotional upload
        $today = date('Y-m-d');
        $todayPost = Post::where('publishdate', $today)->get();

        $dateNow = date('Y-m-d');
        $posts = Post::orderBy('publishdate', 'DESC')->where('published', true)->where('publishdate', '<', $dateNow)->get();

        return view('posts.index', compact('posts', 'todayPost', 'notification', 'live'));
    }

    public function show($post)
    {
        $post = Post::find($post);
        //Get comment count
        $comment_count = $post->comments->count();
        //Comment fetch
        $comments = $post->comments()->paginate(10);
        //Increment number of views
        $count = $post->view_count + 1;
        $post->update([
            'view_count' => $count,
        ]);
        return view('posts.show', compact('post', 'comment_count', 'comments'));
    }

    public function search(Request $request) {
        $search = $request->get('search');
        $posts = Post::where('title', 'like', '%' .$search. '%')
                            ->orWhere('memoryverse', 'like', '%' .$search. '%')
                            ->orWhere('story', 'like', '%' .$search. '%')
                            ->orWhere('publishdate', 'like', '%' .$search. '%')
                            ->paginate(10);
        return view('search', compact('posts', 'search'));
    }

}
