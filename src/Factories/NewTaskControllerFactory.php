<?php

namespace App\Factories;

use App\Controllers\NewTaskController;

class NewTaskControllerFactory
{
    public function __invoke($container)
    {
        $toDoModel = $container->get('toDoModel');
        return new NewTaskController($toDoModel);
    }
}