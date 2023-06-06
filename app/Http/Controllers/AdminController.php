<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AdminController extends Controller
{
    public function admlogout()
    {
        
            $redirectTo = '/login';
            
            
    
            Auth::logout();
    
            return Redirect::to($redirectTo);
        
        
    }

    public function redirect()
    {
       
        return view('admin.home');

    }



    public function view_home()
    {
        return view('admin.pages.home');
    }

    public function view_category()
    {
        return view('admin.pages.category');
    }

    public function view_community()
    {
        return view('admin.pages.community');
    }

    public function view_blog()
    {
        return view('admin.pages.blog');
    }
    
    public function view_about()
    {
        return view('admin.pages.about');
    }

    public function view_contact()
    {
        return view('admin.pages.contact');
    }








    
}
