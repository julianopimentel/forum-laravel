<?php

namespace App\Http\Controllers\Pages;

use App\Models\Thread;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $newblog = Blog::orderBy('id', 'desc')->limit(4)->get();;
        $newtopico = Thread::orderBy('id', 'desc')->limit(3)->get();;

        //contagem no site
        $site_count = DB::table('site_count')->limit(1)->get();
       // $count= $site_count[0]->replies);
        $topics = $site_count[0]->threads;
        $users = $site_count[0]->users;
        $replies = $site_count[0]->replies;


        //dump($users, $topics,  $replies );
       return view('home.index', compact('users', 'topics', 'replies', 'newblog', 'newtopico', 'site_count'));
    }
}
