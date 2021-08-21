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

    public function store(Request $request)
    {

        // dd($request->only('username','email', 'password'));

        // Validation
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Sign in the user
        if (!auth()->attempt($request->only('username', 'email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Details');
        }


        return redirect()->route('home');
    }
}
