<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //login user and return token
    public function login(Request $request)
    { 
        try {

            $client = new Client();
            $res = $client->request('POST', env('OAUTH_TOKEN_URL'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $request->client_id,
                    'client_secret' => $request->client_secret,
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope'   => '*'
                ]

            ]);
        } catch (\Exception $e) {

                return response()->json([
                    'message' => 'Error occured while creating token'
                ]);
        }


        return json_decode((string) $res->getBody(), true);
    }    
}
