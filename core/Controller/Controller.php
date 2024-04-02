<?php

namespace App\Core\Controller;

use App\Core\JS\JS;
use App\Core\View\View;

abstract class Controller{
    private View $view;
    private JS $js;

    public function setView(View $view): void{
        $this->view = $view;
    }
    public function setJS(){
        $this->js = JS::create();
    }
    public function connerctJSFile(string $name){
        $this->setJS();
        $this->js->connect_js_file($name);
    }

    public function view(string $name): void{
        $this->view->page($name);
    }
    public function header(){
        $this->view("parts/header");
    }
}