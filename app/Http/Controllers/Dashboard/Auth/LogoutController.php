<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Redirect user to login page after successfully 
     * loging out from the the application.
     * @return \Illuminte\Http\Response
     */
    function index() {
        // log user out
        auth()->logout();

        return view('dashboard.auth.login');
    }

}
