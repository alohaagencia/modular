<?php

namespace Modules\Login\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Login\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Show login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login::index');
    }

    /**
     * Authenticate user login request.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        //
    }
}
