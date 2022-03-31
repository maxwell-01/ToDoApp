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
        // the request has a JSON body with data for a new student
        $newTask = $response->getParseBody();
        $taskName = $newTask['name'];
        $taskStatus = $newTask['status'];
        $this->toDoModel->createTask($taskName, $taskStatus);

        return $response->withHeader('Location', '/');
    }
}