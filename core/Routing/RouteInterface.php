<?php

namespace App\Core\Routing;

interface RouteInterface
{
    public function __construct(string $uri, $action, string $method);

    public static function get(string $uri, $action);

    public static function post(string $uri, $action);

    public function getUri();

    public function getAction();

    public function getMethod();
}
