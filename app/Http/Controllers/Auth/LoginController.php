<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    /*
        Copy Paste for Testing, put inside the store() function
        // dd();
    */

    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check the if the login details are corrent
        if (!auth()->attempt($request->only('username', 'email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Details');
        }

        //Redirect to Student Home Page
        return redirect()->route('home');
    }
}
