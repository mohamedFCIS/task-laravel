<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public  $posts = [
        'post1' => ['title' => 'News', 'body' => 'the latest news in egypt and the world'],
        'post2' => ['title' => 'sports', 'body' => 'news about football,basketball,swimmingand tinnes'],
        'post3' => ['title' => 'education', 'body' => 'the newest of education you will find here']
    ];

    function show()
    {


        return view("track", ['data' => $this->posts]);
    }

    function show_post($postname)
    {
        // dd($postname);
        $key = array_key_exists($postname, $this->posts);


        if ($key) {
            return view("post", ['data' => $this->posts[$postname]]);
        } else {


            return abort(404);
        }
    }

/////////////



function create(){
$post = Post::all();

   return view("allPosts.showPosts",["data"=>$post]);
}


function dispayForm(){

    return view("allPosts.insert");
}

function store(){
$title = request("title");
$body = request("body");
$version = request("version");
$slug = request("slug");
// dump($title,$body,$version);
//     $post =new  Post();
//     $post->title = $title;
//     $post->body = $body;
//     $post->version = $version;
//     $post->slug = $slug;
// $post->save();
    
Post::create([
    "title"=>$title,
    "body"=>$body,
    "version"=>$version,
    "slug"=>$slug
]);


    return redirect("c");
}
}