<?php

namespace App\Http\Controllers;

use App\Post;
use App\Supe;
use App\User;
use App\UsersPostsView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = DB::table('posts')
                    ->join('supes','posts.id_supe','=','supes.id_supe')
                    ->join('users', 'posts.user_id','=','users.id')
                    ->select('id_post','posts.user_id','users.name','supes.id_supe','supes.nickname','text','posts.updated_at')
                    ->orderBy('posts.updated_at','desc')
                    ->paginate(10);
        
        return view('posts.index', ['posts' => $posts]);
    }

    public function submit()
    {

        $supes = Supe::select('id_supe','nickname')->get();

        return view('posts.submit', ['supes' => $supes]);
    }

    public function create(Request $request)
    {

        Post::create([
            'user_id' => $request->user()->id,
            'id_supe' => $request->id_supe,
            'text' => utf8_encode(strip_tags($request->text))
        ]);

        return redirect('/');
    }

    public function showSupePosts($id_supe, $supe)
    {
        $supePosts =  DB::table('posts')
                ->join('supes','posts.id_supe','=','supes.id_supe')
                ->join('users', 'posts.user_id','=','users.id')
                ->select('id_post','posts.user_id','users.name','supes.id_supe','supes.nickname','text','posts.updated_at')
                ->where('posts.id_supe','=',$id_supe)
                ->orderBy('posts.updated_at','desc')
                ->paginate(10);

        return view('posts.index', ['posts' => $supePosts]);
    }

    public function edit($id_post)
    {
        $post = Post::find($id_post);
        $supes = Supe::select('id_supe','nickname')->get();

        $alreadySupe = Supe::select('nickname')->where('')->get()

        return view('posts.submit', ['post' => $post, 'supes' => $supes]);
    }

    public function delete()
    {
        // dd(Post::find($id_post));
        echo 'oi';
    }
}
