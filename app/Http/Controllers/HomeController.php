<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        $content = 'home/index';
        require_once __DIR__ . '/../views/layout/main.php';
    }
}
