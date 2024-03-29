<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        require_once APP_PATH.'/view/home.php';
    }
}
