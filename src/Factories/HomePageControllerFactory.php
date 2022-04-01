<?php

namespace App\Factories;

use App\Controllers\HomePageController;

class HomePageControllerFactory
{
    public function __invoke($container)
    {
        $toDoModel = $container->get('toDoModel');
        $renderer = $container->get('renderer');
        return new HomePageController($toDoModel, $renderer);
    }
}