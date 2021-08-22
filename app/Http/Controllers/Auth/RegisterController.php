<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        /*
            Special rules I created:
                Username Valid Example: 2018-03657-MN-0
                Email Valid Example: username@iskolarngbayan.pup.edu\.ph
        */

        // Validation
        $this->validate($request, [
            'username' => [
                'required',
                'unique:users',
                'max:255',
                'regex:/^\d{4}-\d{5}-MN-0$/',
            ],
            'first_name' => [
                'required', 
                'string',
                'min:3',  
                'max:255', 
                'regex:/^[a-zA-Z-. ]*$/'],
            'last_name' => [
                'required', 
                'string',
                'min:3',  
                'max:255', 
                'regex:/^[a-zA-Z-. ]*$/'],
            'email' => [
                'required', 
                'email', 
                'max:255', 
                'regex:|^[A-Z0-9._%+-]+@iskolarngbayan.pup.edu\.ph$|i'],
            'password' => [
                'required', 
                'confirmed'],
        ]);

        // Create the validated registration inputs to the user table
        User::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // To check if the user is authenticated and really logged in
        auth()->attempt($request->only('username','email', 'password'));

        // Redirect to Student Home Page
        return redirect()->route('home');
    }
}
