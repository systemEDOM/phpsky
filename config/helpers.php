<?php

use Pecee\SimpleRouter\SimpleRouter as Router;

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return string
 */
function url($name = null, $parameters = null, $getParams = null)
{
    return Router::getUrl($name, $parameters, $getParams);
}

/**
 * @return \Pecee\Http\Response
 */
function response()
{
    return Router::response();
}

/**
 * @return \Pecee\Http\Request
 */
function request()
{
    return Router::request();
}

/**
 * Get input class
 * @param string|null $index Parameter index name
 * @param string|null $defaultValue Default return value
 * @param string|array|null $methods Default method
 * @return \Pecee\Http\Input\Input|string
 */
function input($index = null, $defaultValue = null, $methods = null)
{
    if ($index !== null) {
        return request()->getInputHandler()->get($index, $defaultValue, $methods);
    }

    return request()->getInputHandler();
}

/**
 * @return \Pecee\Http\Response
 */
function redirect($url, $code = null)
{
    if ($code !== null) {
        response()->httpCode($code);
    }
    response()->redirect($url);
}

/**
 * Get base url of the your website
 * @return string
 */
function getBaseUrl()
{
    $currentPath = $_SERVER['PHP_SELF'];
    $pathInfo = pathinfo($currentPath);
    $hostName = $_SERVER['HTTP_HOST'];
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';

    if($pathInfo['dirname'] == "/index.php") return $protocol.$hostName;
    
    return $protocol.$hostName.$pathInfo['dirname'];
}

/**
 * Get current csrf-token
 * @return string|null
 */
function csrf_token()
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}

/**
 * @return array()
 */
function jsonSerialize($data = array())
{
    return $data;
}