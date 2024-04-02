<?php

namespace App\Core\Container;

use App\Core\Http\Request;
use App\Core\Routing\Router;
use App\Core\View\View;
use App\Core\JS\JS;

class Container
{
    public readonly Request $request;
    public readonly View $view;

    public readonly Router $router;
    
    public readonly JS $js;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->router = new Router($this->view);
        $this->js = new JS();
    }
}
