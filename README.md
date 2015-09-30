# Json-Middleware

A simple laravel/lumen middleware for denying non-json POST and PUT requests.

## Installation

You can install json-middleware via composer. 

	$ composer require generationtux/json-middleware:~1.0
	
Once installed you simply need to register the middleware. 

### Laravel 

You should register the middleware in the `App\Http\Kerenel.php`. You can opt to apply the middleware gloablly to all routes, or simply register it under the routes middelware and manually apply it to specific routes. 

```
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'isjson'  => ValidateIsJsonMiddleware::class
    ];
```

### Lumen

Lumen requires you to register the middleware in `bootstrap/app.php` but again you may opt to register the middleware gloablly or not, it's up to you. 

```
	/*
	|--------------------------------------------------------------------------
	| Register Middleware
	|--------------------------------------------------------------------------
	|
	| Next, we will register the middleware with the application. These can
	| be global middleware that run before and after each request into a
	| route or middleware that'll be assigned to some specific routes.
	|
	*/
	$app->middleware([
	    GenTux\Json\Http\ValidateIsJsonMiddleware::class
	]);
```
