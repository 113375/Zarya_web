<?php

namespace App\Controllers;

use App\Core\Controller\Controller;
use App\Core\View\View;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view("home");

    }
}
