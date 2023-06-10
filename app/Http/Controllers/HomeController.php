<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Slider;

class HomeController extends Controller
{   

    public function index() 
    {   
        $slideshows = Slider::all();
        return view('home.userpage',compact('slideshows'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype =='1')
            {
                return view('admin.home');
            }
        else
        {
            $slideshows = Slider::all();
            return view('home.userpage',compact('slideshows'));
        }

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
