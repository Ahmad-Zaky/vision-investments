<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class RegUserController extends Controller
{
    public function payment()
    {
        return view('register.register', [
            'posts' => Post::home()
        ]);
    }
}
