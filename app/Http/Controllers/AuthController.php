<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Comment;
class AuthController extends Controller
{
    public function logout(){
       
        Session::flush();

         Auth::logout();

        return Redirect()->route('home');
    }

    public function check_login(){
        if (Auth::id()) {

            if (Auth::user()->user_type=='0') {
                return redirect()->route('home');
            }else{
             
             return redirect()->route('dashboard');
            }
        }else{
            return redirect()->back();
        }
    }

    public function dashboard(){
        $posts = Post::count();
        $projects = Project::count();
        $messages = Contact::count();
        $comments = Comment::count();
        return view('backend.dashboard', compact('posts', 'projects', 'messages', 'comments'));
    }
}