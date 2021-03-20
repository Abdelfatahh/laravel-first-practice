<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostsController extends Controller
{
    //
    public function index() {
        $allPosts = [
            ['id' => 1, 'title' => 'laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20'],
            ['id' => 2, 'title' => 'PHP', 'posted_by' => 'Mohamed', 'created_at' => '2021-04-15'],
            ['id' => 3, 'title' => 'Javascript', 'posted_by' => 'Ali', 'created_at' => '2021-06-01'],
        ];

        return view('posts.index',[
            'posts' => $allPosts
        ]);
    }

    public function show($postId)
    {
        $posts =
        [
            ['id' => 1, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20', "email" => "ahmed@laravel.php"],
            ['id' => 2, 'title' => 'Javascript', 'description' => 'Why JavaScript is better than PHP', 'posted_by' => 'Abdelfatah', 'created_at' => '2021-02-21',"email" => "abdelfatah@js.nice"],
            ['id' => 3, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20',"email" => "abbas@eldehk.com"],

        ];
        return view('posts.show',[
            'posts' => $posts[$postId-1] ,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        return redirect()->route('posts.index');
    }

    public function edit($postId) {
        $posts =
        [
            ['id' => 1, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20', "email" => "ahmed@laravel.php"],
            ['id' => 2, 'title' => 'Javascript', 'description' => 'Why JavaScript is better than PHP', 'posted_by' => 'Abdelfatah', 'created_at' => '2021-02-21',"email" => "abdelfatah@js.nice"],
            ['id' => 3, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20',"email" => "abbas@eldehk.com"],

        ];

        return view('posts.edit', [
            'posts' => $posts[$postId-1]
        ]);
    }

    public function update($postId) {

        return redirect()->route('posts.index');
    }

}
