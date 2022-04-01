<?php

namespace App\Factories;

use App\Controllers\updateTaskController;

class UpdateTaskControllerFactory
{
    public function __invoke($container)
    {
        $toDoModel = $container->get('toDoModel');
        return new UpdateTaskController($toDoModel);
    }
}