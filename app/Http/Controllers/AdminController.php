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
         $counties= County::all();

         return view('admin.pages.home',compact('imageslide','counties'));
    }

    public function view_category()
    {   
        $counties= County::all();
        return view('admin.pages.category',compact('counties'));
    }

    public function view_community()
    {   
        $counties= County::all();
        return view('admin.pages.community',compact('counties'));
    }

    public function view_blog()
    {   
        $counties= County::all();
        return view('admin.pages.blog',compact('counties'));
    }
    
    public function view_about()
    {   
        $counties= County::all();
        return view('admin.pages.about',compact('counties'));
    }

    public function view_contact()
    {   
        $counties= County::all();
        return view('admin.pages.contact',compact('counties'));
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
                $region->county_id = $request->input('county');

                // Calculate and save the distance
                // Retrieve source and destination points from the database
                $id_county =$request->input('county');
                $county = County::find($id_county);

                if ($county !== NULL)
                {
                    $centerLat = $county->latitude;
                    $centerLon = $county->longitude;

                    $regionLat = $request->input('region_latitude');
                    $regionLon = $request->input('region_longitude');
                    
                    $truncatedDistance = $region->calculateDistance($centerLat, $centerLon, $regionLat, $regionLon);

                    $region->distance = $truncatedDistance;

                    $region->save();

                return redirect()->back()->with('message','Region Successfully Added!');
                
                }
                else {
                    // Handle the case when the central point is not found
                    return redirect()->back()->with('error', 'Central Point Not Found!');
                }

    }  
    
   














}
