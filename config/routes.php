<?php

use App\Controllers\AboutController;
use App\Core\Routing\Route;

return [
    Route::get('/about', [AboutController::class, 'index']),
    Route::get('/', function () {
        header('Location: '. "/about");;
    }),
    
];
