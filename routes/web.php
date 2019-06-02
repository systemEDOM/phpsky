<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use PHPSkyCore\Renderer\Twig;
use PHPSkyCore\Auth\Auth;
use App\Models\User;

use Pecee\Http\Request;
use Pecee\Http\Url;

//use PHPSkyCore\Auth\Auth;

Router::csrfVerifier(new \App\Middlewares\CsrfVerifier());
Router::setDefaultNamespace('\App\Controllers');

/**
 * Routes for the website
 */


Router::group([APP_PREFIX_ENABLED => APP_PREFIX], function() {
	Router::group(['exceptionHandler' => \App\Handlers\ExceptionCustomError::class], function() {
		
		Router::get('/login', function(){
			if(!Auth::attempt(array('admin@admin.com', 'admin12'), User::class)) echo "Credenciales incorrectas";
		});

		Router::get('/getAuth', function(){
			var_dump(Auth::getAuth());
		});

		Router::get('/logout', function(){
			Auth::logout();
		});

		Router::group(['middleware' => App\Middlewares\AuthMiddleware::class], function() {

			Router::get('/', function() {
				return Twig::render('pages/welcome.twig');
			});

			Router::resource('/usuarios', IndexController::class);

		});

	});
});