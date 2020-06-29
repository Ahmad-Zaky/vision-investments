<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = new Post();
        return view('index', [
            'posts' => $posts->home(),
            'mostViewed' => $posts->mostViewed(),
            'categories' => $posts->categories()
            ]);
    }

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
}
