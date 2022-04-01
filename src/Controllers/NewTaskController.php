<?php

namespace App\Controllers;

class NewTaskController
{
    protected $toDoModel;

    public function __construct($toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $newTask = $request->getParsedBody();
        $taskName = $newTask['taskname'];
        $this->toDoModel->createTask($taskName);

        return $response->withHeader('Location', '/');
    }
}