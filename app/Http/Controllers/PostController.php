<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // read all
    public function index()
    {
<<<<<<< HEAD
        return view('index');
        // return view('index', [
        //     'posts' => Post::home(),
        //     'mostViewed' => Post::mostViewed(),
        //     'categories' => Post::categories()
        //     ]);
=======
        return view('index', [
            'posts' => Post::home(),
            'mostViewed' => Post::mostViewed(),
            'categories' => Post::categories()
            ]);
>>>>>>> cf704e62529f0efa54daf011aede787371eced0d
    }
    
    public function indexAdmin()
    {
        // dd(Post::indexAdmin());
        return view('admin.posts.index', [
            'posts' => Post::indexAdmin()
        ]);
    }

    public function indexCardAdmin()
    {
        return view('admin.posts.index-card');
    }

    // read one
    public function show(Post $post)
    {
        $post->category;
        $post->regUser;
        $posts = new Post();
        $postService = new PostService;
        return view('posts.show', [
            'posts' => $posts->home(),
            'post' => $postService->getReadableCreatedAt($post),
            'categoryPosts' => $postService->getReadableCreatedAt(($post->category)->posts()->latest()->get()),
            'fullName' => $post->regUser->first_name . ' ' . $post->regUser->last_name
            ]);
    }

    // read one
    public function showAdmin(Post $post)
    {
        return view('admin.posts.show', [
            'post' => $post
        ]);
    }

    // create
    public function createAdmin()
    {
        return view('admin.posts.create');
    }

    // presist create
    public function storeAdmin()
    {
        dd(request('photo'));
        return view('admin.posts.index');
    }

    // update
    public function editAdmin(Post $post)
    {
        return view('admin.posts.edit');
    }

    // presist update
    public function updateAdmin()
    {
        return view('admin.posts.index');
    }

    public function byCategory(Category $category)
    {
        $posts = new Post();
        $postService = new PostService;
        return view('posts.index', [
            'posts' => $posts->home(),
            'category' => $category,
            'categoryPosts' => $postService->getReadableCreatedAt($category->posts()->latest()->get())
        ]);
    }

    protected function validateArticle(){

        return request()->validate([

            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
