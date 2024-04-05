<?php

namespace App\Core\Routing;

use App\Core\View\View;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct(private View $view)
    {
        $this->initRoutes();
    }

    private function initRoutes()
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    private function notFound()
    {
        require_once APP_PATH.'/views/pages/404.php';
        exit;
    }

    private function callByController(RouteInterface $route)
    {
        [$controller, $action] = $route->getAction();
        $controller = new $controller();
        call_user_func([$controller, 'setView'], $this->view);
        call_user_func([$controller, $action]);
    }

    private function callByClosure(RouteInterface $route)
    {
        call_user_func($route->getAction());
    }

    public function dispatch(string $uri, string $method)
    {
        $route = $this->findRoute($uri, $method);

        if (! $route) {
            $this->notFound();
        }

        if (is_array($route->getAction())) {
            $this->callByController($route);
        } else {
            $this->callByClosure($route);
        }

    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];

    }

    public function getRoutes()
    {
        return require_once APP_PATH.'/config/routes.php';
    }
}
