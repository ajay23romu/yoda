<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function root()
	{
		return View::make('hello');
	}

    public function facebookLogin()
    {
        $code = Input::get( 'code' );
        $fb = OAuth::consumer( 'Facebook' );
        if ( !empty( $code ) ) {
            $token = $fb->requestAccessToken( $code );
            $result = json_decode( $fb->request( '/me' ), true );
            $user = User::where('email',$result['email'])->first();
            if($user)
            {
                $user->token = strval($token->getAccessToken());
                $user->save();
            }
            else
            {
                $user = new User;
                $user->name = $result['name'];
                $user->email = $result['email'];
                $user->fb_id = $result['id'];
                $user->token = strval($token->getAccessToken());
                $user->save();
            }
            Auth::login($user);
            return Redirect::route('invite');
        }
        else {
            $url = $fb->getAuthorizationUri();
            return Redirect::to( (string)$url );
        }
    }

    public function invite()
    {
        if(Auth::check())
        {
            $data['user'] = Auth::user();
            return View::make('invite',$data);
        }
        else
        {
            return Redirect::route('root');
        }
    }

    public function redirect()
    {
        return View::make('redirect');
    }

}
