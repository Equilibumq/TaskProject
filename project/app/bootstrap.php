<?php
    spl_autoload_register(function ($class) {
    include __DIR__. '/core/'. $class. '.php';
    });
    Route::start();