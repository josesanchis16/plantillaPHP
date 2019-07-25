<?php

namespace App\controllers;

use App\ViewManager;

class LoginController
{
    public function index()
    {
        $viewManager = new ViewManager();
        $viewManager->renderTemplate('login.twig.html');
    }
}
