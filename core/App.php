<?php

namespace App\Core;

use App\Core\Http\Request;
use App\Core\Routing\Router;
use App\Core\Container\Container;

class App
{
    private Container $container;
    public function __construct(){
        $this->container = new Container();
    }
    public function run()
    {
        $this->container->router->dispatch($this->container->request->uri(), $this->container->request->method());
    }
}
