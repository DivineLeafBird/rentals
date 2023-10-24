<?php

namespace App\Http\Controllers;

use App\Models\AmenHome;
use App\Models\Schedule;
use App\Models\Application;
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

    public function application_form($form)
    {
        if (Auth::check()) {
            $home = Home::findOrFail($form);
            return view('home.application', compact('home'));
        } else {

            return redirect::to('/login');
        }
    }

    public function rent_application(Request $request, $home_id)
    {
        $newApplication = new Application();

        $userID = auth()->user()->id;

        $newApplication->user_id = $userID;
        $newApplication->home_id = $home_id;
        $newApplication->name = $request->input('name');
        $newApplication->email = $request->input('email');
        $newApplication->phone = $request->input('phone');
        $newApplication->dob = $request->input('dob');
        $newApplication->id_number = $request->input('national_id');
        $newApplication->move_in_date = $request->input('move_in_date');
        $newApplication->rental_duration = $request->input('rental_duration');
        $newApplication->total_rent = $request->input('total_rent');
        $newApplication->more_info = $request->input('comments');

        $newApplication->save();


        $user = User::findorFail($userID);
        $user->dob = $request->input('dob');
        $user->id_number = $request->input('national_id');

        // Check if the input values are not empty and different from the current values
        if (!empty($dob) && $dob !== $user->dob) {
            $user->dob = $dob;
        }

        if (!empty($nationalId) && $nationalId !== $user->id_number) {
            $user->id_number = $nationalId;
        }


        $user->save();

        return redirect()->back()->with('message', 'Application Successfully Sent!');
    }


    public function schedule_home($schedule)
    {
        if (Auth::check()) {
            $home = Home::findOrFail($schedule);

            return view('home.appointment_form', compact('home'));
        } else {
            return redirect::to('/login');
        }
    }

    public function schedule_appointment(Request $request, $home)
    {
        $newShedule = new Schedule();

        $userID = auth()->user()->id;
        $newShedule->user_id = $userID;
        $newShedule->home_id = $home;
        $newShedule->name = $request->input('name');
        $newShedule->email = $request->input('email');
        $newShedule->phone = $request->input('phone');
        $newShedule->id_number = $request->input('national_id');
        $newShedule->tour_date = $request->input('tour_date');
        $newShedule->tour_time = $request->input('tour_time');
        $newShedule->more_info = $request->input('comments');

        $newShedule->save();

        $user = User::findorFail($userID);
        $user->id_number = $request->input('national_id');

        if (!empty($nationalId) && $nationalId !== $user->id_number) {
            $user->id_number = $nationalId;
        }

        $user->save();

        return redirect()->back()->with('message', 'Application Successfully Sent!');
    }


    public function application_status()
    {
        $applications = Application::with('home')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('home.application_status', compact('applications'));
    }


    public function appointment_status()
    {
        $appointments = Schedule::with('home')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('home.appointment_status', compact('appointments'));
    }

    public function delete_application($delete)
    {
        $delete_application = Application::findOrFail($delete);

        $delete_application->delete();

        return redirect()->back()->with('message_type', 'error')->with('message', ' Application Deleted Successfully! ');
    }


    public function make_payment($pay)
    {
        $payment = Application::Where('id', $pay)->first();
        return view('home.payment', compact('payment'));
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
