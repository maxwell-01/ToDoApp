<?php

namespace App;

use PDO;

class ToDoModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks(): array
    {
        $query = $this->db->prepare('SELECT * FROM `tasks`');
        $query->execute();
        return $query->fetchAll();
    }

    public function createTask(string $taskName): void
    {
        $taskStatus = "Incomplete";
        $query = $this->db->prepare('INSERT INTO `tasks` (`taskname`, `status`) VALUES (:taskname, :status);');
        $query->execute(['taskname' => $taskName, 'status' => $taskStatus]);
    }

    public function updateTask(string $taskId): void
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `status`="complete" WHERE `id`=:id');
        $query->execute(['id' => $taskId]);
    }
}