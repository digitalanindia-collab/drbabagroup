<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function aboutus()
    {
        // dd("dd");
        return view('frontend/about');
    }
    public function fallback()
    {
        dd("fallback");
        //return response()->view('errors.404', [], 404);
    }
    public function signup()
    {
        // dd("dd");
        return view('frontend/signup');
    }
    public function signup_post(Request $request)
    {

        $request->validate([
            "first_name" => 'required',
            "last_name"  => 'required',
            "email"      => 'required|email|unique:users,email',
            "phone"      => 'required|unique:users,phone',
            "password"   => 'required|min:6',
            'sponsor_id' => 'required|exists:users,id',
        ]);
        if (auth()->check() && auth()->id() == $request->sponsor_id) {
            return back()->withErrors(['sponsor_id' => 'You cannot sponsor yourself']);
        }
        $data = $request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'password',
            'sponsor_id'
        ]);

        $data['role'] = "2";
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);
        return redirect('/signup')->with("success", "You signed up successfully");
    }
    public function login()
    {
        return view('frontend/login');
    }
    public function login_post(Request $request)
    {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->to('/signup')->with("success", "Email not found");
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->to('/signup')->with("success", "Password is incorrect");
        }
        //  dd($user);
        Auth::login($user);
        //  auth()->login($user);
        //   dd($user);
        return redirect()->to('/dashboard');
    }

    public function dashboard()
    {
        return view('user/dashboard');
    }

    public function plan()
    {
        $data = Plan::all();
        return view('frontend/plan', ['data' => $data]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('admin');
    }

    public function contactus()
    {
        //dd("dd");
        return view('frontend/contactUs');
    }
    public function view_rank()
    {
      $authId = auth()->id();
$user = User::select('id', 'sponsor_id')->find($authId);
if (!$user || !$user->sponsor_id) {
    $data['sponsor'] = 'No Sponsor';
} else {
    $sponsor = User::select('first_name', 'last_name')->find($user->sponsor_id);
    $data['sponsor'] = $sponsor
        ? $sponsor->first_name . ' ' . $sponsor->last_name
        : 'No Sponsor';
}
$data['followers'] = User::where('sponsor_id', $authId)->get();
$followerIds = $data['followers']->pluck('id')->toArray();
$data['level1'] = User::whereIn('sponsor_id', $followerIds)->get();
        return view('user.rank', compact('data'));
    }
}
