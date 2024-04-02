<?php

namespace App\Core\JS;

class JS {
    public static function create(){
        return new self;
    }
    public function connect_js_file(string $name){
        require_once APP_PATH . "/core/JS/addJS.php";
    }
}