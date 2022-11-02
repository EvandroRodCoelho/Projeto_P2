<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
<<<<<<< HEAD
    /**
     * Display login page.
     *
     * @return Renderable
     */
=======
>>>>>>> 0e558089f461e26f39ec9b083483199154e61b02
    public function show()
    {
        return view('loginPage');
    }

<<<<<<< HEAD
    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 0e558089f461e26f39ec9b083483199154e61b02
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) :
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}