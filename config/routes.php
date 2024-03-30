<?php

use App\Controllers\HomeController;
use App\Core\Routing\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/', function () {
        require_once APP_PATH.'/views/pages/main.php';
    }),
];
