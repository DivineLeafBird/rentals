<?php

namespace App\Http\Controllers;

use App\Models\AmenHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Slider;
use App\Models\County;
use App\Models\Region;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Community;
use App\Models\Home;
use App\Models\Imageshome;

class HomeController extends Controller
{

    public function index()
    {
        $slideshows = Slider::all();
        $homes = Home::all();

        $amenityIcons = [

            'Free Parking' => 'bi bi-p-circle icons',
            'Top Security' => 'bi bi-shield-check icons',
            'Fresh Water' =>  'bi bi-droplet',
            'Free WiFi' =>    'bi bi-wifi icons',
            'Electricity' =>  'bi bi-lightning-charge',
            'Strong Signal' => 'bi bi-bar-chart',
            'Garden' =>        'bi bi-tree',
            'Lobby' =>         'bi bi-bricks',
            'Fan' =>           'bi bi-fan',
            'Airport logistics' => 'bi bi-airplane icons',
        ];

        return view('home.userpage', compact('slideshows', 'homes', 'amenityIcons'));
    }

    public function redirect()
    {
        if (Auth::check()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == null) {

                return redirect('/');
            } elseif ($usertype == '1') {
                $counties = County::all();
                return view('admin.home', compact('counties'));
            } else {
                $slideshows = Slider::all();
                $homes = Home::all();
                return view('home.userpage', compact('slideshows', 'homes'));
            }
        } else {
            return redirect('/login');
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
        return view('home.header', compact('data'));
    }

    public function category()
    {
        $homes = Home::all();
        return view('home.category', compact('homes'));
    }

    public function home_details($home)
    {
        $data = Home::findOrFail($home);
        $images = Imageshome::Where('home_id', $home)->get();

        $amenityIcons = [

            'Free Parking' => 'bi bi-p-circle icons',
            'Top Security' => 'bi bi-shield-check icons',
            'Fresh Water' =>  'bi bi-droplet',
            'Free WiFi' =>    'bi bi-wifi icons',
            'Electricity' =>  'bi bi-lightning-charge',
            'Strong Signal' => 'bi bi-bar-chart',
            'Garden' =>        'bi bi-tree',
            'Lobby' =>         'bi bi-bricks',
            'Fan' =>           'bi bi-fan',
            'Spa' =>           'bi bi-brightness-alt-high',
            'Bar' =>           'bi bi-cup-straw',
            'Airport logistics' => 'bi bi-airplane icons',
        ];

        $amenities = AmenHome::Where('home_id', $home)->get();

        return view('home.home_details', compact('data', 'images', 'amenityIcons', 'amenities'));
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
