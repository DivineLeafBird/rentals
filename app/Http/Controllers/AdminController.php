<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Slider;
use App\Models\County;
use App\Models\Region;
use App\Models\Category;
use App\Models\Home;
use App\Models\Amenity;
use App\Models\AmenHome;
use App\Models\Blog;
use App\Models\Imageshome;


class AdminController extends Controller
{
    public function admlogout()
    {

        $redirectTo = '/login';



        Auth::logout();

        return Redirect::to($redirectTo);
    }


    public function view_slideshow()
    {
        $imageslide = Slider::all();
        $counties = County::all();

        return view('admin.pages.slideshow', compact('imageslide', 'counties'));
    }

    public function view_category()
    {
        $counties = County::all();
        $categories = Category::all();

        return view('admin.pages.category', compact('counties', 'categories',));
    }

    public function view_amenities()
    {
        $counties = County::all();
        $amenities = Amenity::all();

        return view('admin.pages.amenities', compact('counties', 'amenities'));
    }

    public function view_home()
    {
        $counties = County::all();
        $categories = Category::all();
        $regions = Region::all();
        $amenities = Amenity::all();

        return view('admin.pages.add_home', compact('counties', 'categories', 'regions', 'amenities'));
    }

    public function view_about()
    {
        $counties = County::all();
        return view('admin.pages.about', compact('counties'));
    }

    public function view_contact()
    {
        $counties = County::all();
        return view('admin.pages.contact', compact('counties'));
    }

    public function view_homes()
    {
        $counties = County::all();
        $home = Home::all();
        return view('admin.pages.view_homes', compact('counties', 'home'));
    }

    public function show_home($id)
    {
        $home = Home::find($id);
        $counties = County::all();
        $categories = Category::all();
        $regions = Region::all();
        $amenities = Amenity::all();

        return view('admin.pages.show_home', compact('home', 'counties', 'categories', 'regions', 'amenities'));
    }

    public function delete_home($id)
    {
        $home = Home::find($id);

        $home->delete();

        return redirect('/view_homes')->with('message', 'Home Successfully Deleted!');
    }


    public function update_slider(Request $request)
    {

        $slideshows = new Slider;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('slider', $imagename);
        $slideshows->image = $imagename;


        $slideshows->save();

        return redirect()->back()->with('message', 'Slider-Image Successfully Updated!');
    }

    public function delete_slider($id)
    {
        $slideshow = Slider::find($id);
        $slideshow->delete();

        return redirect()->back()->with('message', 'Slider-Image Successfully Deleted!');
    }

    public function  add_county(Request $request)
    {
        // Create a new county
        $county = new County();
        $county->name = $request->input('county_name');
        $county->latitude = $request->input('county_latitude');
        $county->longitude = $request->input('county_longitude');
        $county->save();

        return redirect()->back()->with('message', 'County Successfully Added!');
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
        $id_county = $request->input('county');
        $county = County::find($id_county);

        if ($county !== NULL) {
            $centerLat = $county->latitude;
            $centerLon = $county->longitude;

            $regionLat = $request->input('region_latitude');
            $regionLon = $request->input('region_longitude');

            $truncatedDistance = $region->calculateDistance($centerLat, $centerLon, $regionLat, $regionLon);

            $region->distance = $truncatedDistance;

            $region->save();

            return redirect()->back()->with('message', 'Region Successfully Added!');
        } else {
            // Handle the case when the central point is not found
            return redirect()->back()->with('error', 'Central Point Not Found!');
        }
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->input('category_name');
        $category->save();

        return redirect()->back()->with('message', 'Category Succefully Added!');
    }

    public function delete_category($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->back()->with('message', 'Category Successfully Deleted!');
    }

    public function add_amenity(Request $request)
    {
        $amenity = new Amenity;
        $amenity->name = $request->input('amenity_name');
        $amenity->save();

        return redirect()->back()->with('message', 'Amenity Succefully Added!');
    }

    public function delete_amenity($id)
    {
        $amenities = Amenity::find($id);
        $amenities->delete();

        return redirect()->back()->with('message', 'Amenity Successfully Deleted!');
    }

    public function add_home(Request $request)
    {
        $newHome = new Home();

        // save house details

        $newHome->house_name = $request->input('house_name');

        $newHome->category_id = $request->input('category_name');

        $category_id = $request->input('category_name');
        $category = Category::findOrFail($category_id);
        $newHome->category_name = $category->category_name;

        $thumbnail = $request->thumbnail;
        $thumbnail_name = time() . '.' . $thumbnail->getClientOriginalExtension();
        $request->thumbnail->move('thumbnails', $thumbnail_name);
        $newHome->thumbnail = $thumbnail_name;


        $newHome->short_desc = $request->input('short_desc');
        $newHome->description = $request->input('description');
        $newHome->inventory = $request->input('inventory');
        $newHome->rent_price = $request->input('rent_price');
        $newHome->discount = $request->input('discount');

        $newHome->county_id = $request->input('county');
        $newHome->region_id = $request->input('region');

        $county_id = $request->input('county');
        $county = County::findOrFail($county_id);
        $newHome->county = $county->name;

        $region_id = $request->input('region');
        $region = Region::findOrFail($region_id);
        $newHome->region = $region->name;

        // calculate Distance

        $id_county =  $request->input('county');
        $count = County::findOrFail($id_county);

        if ($count !== NULL) {
            $centerLat = $count->latitude;
            $centerLon = $count->longitude;

            $id_region = $request->input('region');
            $regi = Region::findOrFail($id_region);
            $regionLat = $regi->latitude;
            $regionLon = $regi->longitude;

            $truncatedDistance = $newHome->calculateDistance($centerLat, $centerLon, $regionLat, $regionLon);

            $newHome->distance_county_center = $truncatedDistance;
        }


        $newHome->landlord_name = $request->input('landlord_name');
        $newHome->phone_number = $request->input('phone_number');

        // save Images

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('homeimages');

                $ImagesModel = new Imageshome();
                $ImagesModel->home_name = $request->input('house_name');
                $ImagesModel->original_name = $image->getClientOriginalName();
                $ImagesModel->filename = $path;
                $ImagesModel->save();
            }
        }

        // save video
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogg,ogv,webm'
        ]);

        $video = $request->file('video');

        // if ($video) {
        //     $filename = $video->getClientOriginalName();
        //     $video->move('videos', $filename);
        //     // Generate a URL to the uploaded video
        //     $videoUrl = asset('videos/' . $filename);
        //     // Store the video URL in the 'video' column of the Home model
        //     $newHome->video = $videoUrl;
        // }



        $video = $request->file('video');
        $video->move('public/videos', $video->getClientOriginalName());
        $filename = $video->getClientOriginalName();
        $newHome->video = $filename;

        // Amenities

        $selectedAmenities = $request->input('amenities', []);

        // Save the selected amenities for the home
        foreach ($selectedAmenities as $amenityId) {
            $amenity = Amenity::find($amenityId);

            $AmenModel =  new AmenHome();
            $AmenModel->amenity_name = $amenity->name;
            $AmenModel->amenity_id = $amenity->id;
            $AmenModel->home_name = $request->input('house_name');

            $AmenModel->save();
        }

        $newHome->save();

        return redirect()->back()->with('message', 'Home Successfully Added!');
    }
}
