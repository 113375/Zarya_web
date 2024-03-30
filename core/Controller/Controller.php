<?php

namespace App\Core\Controller;

use App\Core\View\View;

abstract class Controller{
    private View $view;

    public function setView(View $view): void{
        $this->view = $view;
    }

    public function view(string $name): void{
        $this->view->page($name);
    }
}