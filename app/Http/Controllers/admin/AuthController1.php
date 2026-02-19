<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Session;

class AuthController extends Controller
{
    //
    public function signup() {

        return view('signup');
    }

    public function admin_login() {
        return view("admin/login");
    }
   public function admin_post_login(Request $request) {
    $email = $request->email;
    $password = $request->password;
    $user = User::where('email', $email)->first();

    if (!$user) {
        return redirect()->to('/admin')->with("message", "Email not found");
    }

    if (!Hash::check($password, $user->password)) {
        return redirect()->to('/admin')->with("message", "Password is incorrect");
    }
Auth::login($user);
  //  auth()->login($user);
     //   dd($user);
    return redirect()->to('admin/dashboard');
}

 public function dashboard() {
//dd(Auth()->user());
        return view('admin/dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
return Redirect('admin');
    }

}
