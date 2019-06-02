# PHPSky by Daniel OSeguera
=====================

This is an MVC-based PHP skeleton for your projects. You can download this repository and start to work in your project, the skeleton has to work routes, middlewares, models, controllers, emails, eloquent, and more. You can see the components we use.

#### Note :
This skeleton is done to PHP versions ">=5.4.0" but you can update components and PHP version.

## simple-php-router:
We use simple-php-router to middlewares, routes, controllers, and more, you can see the documentation: <a href='https://github.com/skipperbent/simple-php-router'>repository</a>.

## Templates:
We use Twig to templates is fantastic and famous, you can visit the website: <a href='https://twig.symfony.com/'>Twig</a>. Our basic configuration for Twig allow you that you can use the user authenticated in the templates and more functions.

## Mails:
We use PHPMailer to send emails: <a href='https://github.com/PHPMailer/PHPMailer'>repository</a>.

## Eloquent:
We use the Eloquent of Laravel is fantastic, connection to DB, models and more : <a href='https://github.com/illuminate/database'>repository</a>.

## Emails:
We use PHPMailer for send emails : <a href='https://github.com/PHPMailer/PHPMailer'>repository</a> You can use PHPSKyCore\Mail\Mail this class extends from PHPMailer but with the configuration of env.php.

## Login:
We implement a login functions, in this repository in routes/web.php you have an example, this login is done with JWT.

Installation
=============
Install this package:

You can clone this resporitory or download the repository from GitHhub

```js
git clone https://github.com/systemEDOM/phpskeleton-edom.git
```

You can download in your server, if you don't have a local domain and your project is in a folder you can edit file public/index.php and the constant APP_PREFIX_ENABLED = prefix and APP_PREFIX = to your folder or url.

## Structure
`app` You can see in this folder all logic of your application <br>
`app/Controller` Controller (programming logic) of your application <br>
`app/Exceptions` Exceptions of your application <br>
`app/Handlers` Handlers of your application for example '404 error' <br>
`app/Middlewares` Middleware of your application, in this folder you can implement your middlewares. <br>
`app/Models` Models of your application, in this folder you have the models to work with your DB. <br>
`config` config of your application, in this folder you can edit connection to DB, mail, etc. <br>
`config/helpers.php` Helpers of your application, functions that you can use like 'redirect() and others' <br>
`public` in this folder you save your assets, .htaccess and others. <br>
`resources` in this folder you work your views, storage is the cache template. <br>
`routes` in this folder in the file web.php you work your routes. <br>

Patreon and PayPal Me
==========
Please, if you liked this skeleton i invite you to see my <a href="https://www.patreon.com/sysedom">Patreon</a> or my <a href="https://www.paypal.me/sysedom?locale.x=es_XC">PayPal Me</a> and if you can donate i will thank you.

Conclusion
==========
Please feel free to report issues so you can help to improve the package.