<?php

namespace App\Controllers;

class UpdateTaskController
{
    protected $toDoModel;

    public function __construct($toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $taskId = $args['taskId'];
        $this->toDoModel->updateTask($taskId);

        return $response->withHeader('Location', '/');
    }
}