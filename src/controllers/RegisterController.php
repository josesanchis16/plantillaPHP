<?php
namespace App\controllers;

use App\ViewManager;

class RegisterController {
    public function index(){
        $viewManager = new ViewManager();
        $viewManager->renderTemplate('register.twig.html');
    }
}