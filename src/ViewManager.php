<?php

namespace App;

use Twig;

class ViewManager
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => dirname(__DIR__) . '/cache/views'
        ]);
    }

    public function render($view, $args = [])
    {
        if ($args != null) extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . '/templares' . $view;

        if (!is_readable($file)) throw new \InvalidArgumentException();

        require $file;
    }

    public function renderTemplate($template, $args = [])
    {
        echo  $this->twig->render($template, $args);
    }
}
