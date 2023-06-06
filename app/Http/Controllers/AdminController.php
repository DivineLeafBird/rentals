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








    
}
