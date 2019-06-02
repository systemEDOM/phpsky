<?php

namespace App\Handlers;

use Pecee\SimpleRouter\Handlers\IExceptionHandler;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\Http\Middleware\Exceptions\TokenMismatchException;
use Pecee\Http\Request;

use PHPSkyCore\Renderer\Twig;

class ExceptionCustomError implements IExceptionHandler
{
	public function handleError(Request $request, \Exception $error) : void
	{
		/* The router will throw the NotFoundHttpException on 404 */
		if($error instanceof NotFoundHttpException) {
			$error = $error->getMessage();
			Twig::render('/errors/404.twig', compact('error'));
			exit;
		}
	}
}
