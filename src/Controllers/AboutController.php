<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        self::header();
        $this->view("about");
        self::footer();
    }
}
