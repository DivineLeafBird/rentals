<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype =='1')
            {
                return view('admin.home');
            }
        else
        {
            return view('home.userpage');
        }

    }


    public function index() 
    {
        return view('home.userpage');
    }


    public function logout()
    {

        
        Auth::logout();
        
        return Redirect::to('/');
    }

    public function users()
    {
        $data = User::all();
        return view('home.header',compact('data'));
        
    }

    public function category()
    {
        return view('home.category');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function blogstory()
    {
        return view('home.blog-story');
    }

    public function community()
    {
        return view('home.community');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function communityreplies()
    {
        return view('home.community-replies');
    }

}
