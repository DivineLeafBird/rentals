<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Slider;
use App\Models\County;
use App\Models\Region;

class AdminController extends Controller
{
    public function admlogout()
    {
        
            $redirectTo = '/login';
            
            
    
            Auth::logout();
    
            return Redirect::to($redirectTo);
        
        
    }


    public function view_home()
    {   
         $imageslide= Slider::all();
         return view('admin.pages.home',compact('imageslide'));
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


    public function update_slider (Request $request)
    {
        
        $slideshows= new Slider;
        $image= $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('slider',$imagename);
        $slideshows->image=$imagename;


        $slideshows->save();

        return redirect()->back()->with('message','Slider-Image Successfully Updated!');

    }

    public function delete_slider($id)
    {
        $slideshow= Slider::find($id);
        $slideshow->delete();

        return redirect()->back()->with('message','Slider-Image Successfully Deleted!');
    }

    public function  add_county(Request $request)
    {
                // Create a new county
                $county = new County();
                $county->name = $request->input('county_name');
                $county->latitude = $request->input('county_latitude');
                $county->longitude = $request->input('county_longitude');
                $county->save();

                return redirect()->back()->with('message','County Successfully Added!');
    }

    public function add_region(Request $request)
    {
                // Create a new region
                $region = new Region();
                $region->name = $request->input('region_name');
                $region->latitude = $request->input('region_latitude');
                $region->longitude = $request->input('region_longitude');
                $region->county_id = $county->id; // Set the foreign key

                // Calculate and save the distance
                $distance = $region->distance;
                $region->distance = $distance;

                $region->save();

                return redirect()->back()->with('message','Region Successfully Added!');
    }    
}
