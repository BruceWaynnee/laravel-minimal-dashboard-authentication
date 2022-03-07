<?php

namespace App\Http\Controllers\Dashboard\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /**
     * Redirect dashboard user to register form of the application.
     * @return \Illuminte\Http\Response
     */
    function index() {
        return view('dashboard.auth.register');
    }

    /**
     * Register dashboard user and log them into dashboard.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminte\Http\Response
     */
    function store( Request $request ) {
        // validate request
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname'  => 'required|max:255',
            'email'     => 'required|email|max:225',
            'password'  => 'required|confirmed',
        ]);

        // store user account
        User::create([
            'firstname' => $request['firstname'],
            'lastname'  => $request['lastname'],
            'email'     => $request['email'],
            'password'  => Hash::make( $request['password'] ),
        ]);

        // sign the user in to dashboard
        auth()->attempt( $request->only( 'email', 'password' ) );

        // redirect user to dashboard home page
        return redirect()->route('dashboard');
    }

}
