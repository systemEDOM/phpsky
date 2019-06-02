<?php

namespace App\Middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

class AuthMiddleware implements IMiddleware
{

    public function handle(Request $request) : void
    {
    	if(!isset($_COOKIE['jwt']) || empty($_COOKIE['jwt'])) {
    		redirect('/login');
		}

		try {
        	JWT::$leeway = 60;
			$secretKey = base64_decode(SECRET_KEY); 
			$decodeDataArray = JWT::decode($_COOKIE['jwt'], $secretKey, array(ALGORITHM));
		} catch (ExpiredException $e) {
			redirect('/login');
		} catch (Exception $e) {
			redirect('/login');
		}
    }
}