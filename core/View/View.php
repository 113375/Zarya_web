<?php

namespace App\Core\View;

class View{
    public function page(string $name){
        require_once APP_PATH . "/views/pages/$name.php";
    }
}