<?php

namespace App\Controllers;

class updateTaskController
{
    protected $toDoModel;

    public function __construct($toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        // the request has a JSON body with data for a new student
        $taskToUpdate = $response->getParseBody();
        $taskName = $taskToUpdate['name'];
        $taskStatus = $taskToUpdate['status'];
        $this->toDoModel->updateTask($taskName, $taskStatus);

        return $response->withHeader('Location', '/');
    }
}