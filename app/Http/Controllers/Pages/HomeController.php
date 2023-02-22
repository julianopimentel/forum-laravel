<?php

namespace App\Http\Controllers\Pages;

use App\Models\Thread;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $topics = Thread::count();
        $users = User::count();
        $replies = Reply::count();

        //dump($users, $topics,  $replies );
       return view('home.index', compact('users', 'topics', 'replies'));
    }
}
