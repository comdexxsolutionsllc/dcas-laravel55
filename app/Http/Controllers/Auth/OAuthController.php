<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

abstract class OAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider(): Response
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(): Response
    {
        $user = Socialite::driver('github')->user();

        // Handle provider callback. The following is filler.
        $user->token;
    }
}
