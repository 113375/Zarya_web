<?php

namespace App\Core;

use App\Core\Http\Request;
use App\Core\Routing\Router;

class App
{
    public function run()
    {
        $router = new Router();
        $request = Request::createFromGlobals();
        $uri = $request->uri();
        $method = $request->method();

        $router->dispatch($uri, $method);

    }
}
