<?php

namespace GenTux\Support;

use GenTux\Http\ValidateIsJsonMiddleware;
use Illuminate\Support\ServiceProvider;

class JsonMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register('ValidateIsJsonMiddleware', function() {
            return new ValidateIsJsonMiddleware();
        });
    }

    public function provides()
    {
        return ['GenTux\Http\ValidateIsJsonMiddleware'];
    }
}