<?php

namespace App\Core\Container;

use App\Core\Http\Request;
use App\Core\Routing\Router;
use App\Core\View\View;

class Container
{
    public readonly Request $request;
    public readonly View $view;

    public readonly Router $router;
    

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->router = new Router($this->view);
    }
}
