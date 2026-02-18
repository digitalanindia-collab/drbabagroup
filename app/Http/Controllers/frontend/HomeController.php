<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function aboutus() {
       // dd("dd");
        return view('frontend/about');
    }
   public function fallback()
{
    dd("fallback");
    //return response()->view('errors.404', [], 404);
}
public function signup() {
   // dd("dd");
    return view('frontend/signup');
}
public function signup_post(Request $request) {
$request->validate([
    "first_name" => 'required',
    "last_name"  => 'required',
    "email"      => 'required|email|unique:users,email',
    "phone"      => 'required|unique:users,phone',
    "password"   => 'required|min:6',
]);
$data = $request->only([
    'first_name',
    'last_name',
    'email',
    'phone',
    'password'
]);

$data['role'] = "2";
$data['password'] = Hash::make($data['password']);
$user = User::create($data);
Auth::login($user);
//Session::flash("success","You signed up successfully");
return redirect('/signup')->with("success","You signed up successfully");
}
public function login() {
    return view('frontend/login');
}
public function login_post(Request $request) {
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

public function dashboard() {
    return view('frontend/dashboard');
}

public function plan() {
    return view('frontend/plan');
}
}
