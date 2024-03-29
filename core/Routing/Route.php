<?php

namespace App\Core\Routing;

class Route implements RouteInterface
{
    public function __construct(private string $uri, private $action, private string $method)
    {

    }

    public static function get(string $uri, $action)
    {
        return new self($uri, $action, 'GET');
    }

    public static function post(string $uri, $action)
    {
        return new self($uri, $action, 'POST');
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }
}
