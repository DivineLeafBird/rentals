<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AdminController extends Controller
{
    public function logout()
    {
        $redirectTo = '/';

        if (Auth::user()->usertype === 1) {
            $redirectTo = '/'; 
        } elseif (Auth::user()->usertype === 0) {
            $redirectTo = '/'; 
        }

        Auth::logout();

        return Redirect::to($redirectTo);
     
    }








    
}
