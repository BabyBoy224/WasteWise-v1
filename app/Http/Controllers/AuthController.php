<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
     use ValidatesRequests;
    public function index()
    {
        Auth::logout();
        return view('login');
    }

        public function store(Request $request)
        {
        $this->validate($request,[
        'username' => 'required',
        'password' => 'required'
        ]);
                $credentials = $request->only('username', 'password');

        if(! Auth::attempt( $credentials ) ) {
        return back()->withErrors('Invalid credentials')->withInput($request->all);
        }
        // Set session variable
        Session::put('username', $request->username);
        Session::put('password', $request->password);

        // Retrieve session variable
        $username = Session::get('username');
        $password = Session::get('password');

        return redirect('/dashboard');
        }

    public function destroy()
    {
        $user = User::where('id', Auth::id())->first();

        Auth::logout();
        return redirect('/login');
    }

}
