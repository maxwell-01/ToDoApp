<?php

namespace App\Controllers;

class HomePageController
{
    protected $toDoModel;
    protected $renderer;

    public function __construct($toDoModel, $renderer)
    {
        $this->toDoModel = $toDoModel;
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->toDoModel->getAllTasks();
        $data = ['tasks' => $tasks];
        return $this->renderer->render($response, 'toDoList.php', $data);
    }
}