<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Redirect dashboard user to login form of the application.
     * @return \Illuminte\Http\Response
     */
    function index() {
        return view('dashboard.auth.login');
    }

    /**
     * Log the user into the dashboard if pass authentication process.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminte\Http\Response
     */
    function store( Request $request ) {
        // validate request
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|',
        ]);

        // authenticate user
        if( !auth()->attempt( $request->only( 'email', 'password' ) ) ) {
            return back()->with('error', 'Invalid login details!');
        }

        // redirect user to dashboard home page
        return redirect()->route('dashboard');
    }


}
