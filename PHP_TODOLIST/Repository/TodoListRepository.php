<?php

namespace Repository {

  use Entity\TodoList;

  interface TodoListRepository
  {
    function save(TodoList $todoList): void;

    function remove(int $number): bool;

    function findAll(): array;
  }

  class TodoListRepositoryImpl implements TodoListRepository
  {
    public array $todoList = array();

    private \PDO $connection;
    function __construct(\PDO $connection)
    {
      $this->connection = $connection;
    }
    function save(TodoList $todoList): void
    {
      // $number = sizeof($this->todoList) + 1;
      // $this->todoList[$number] = $todoList;

      $sql = "INSERT INTO todolist(todo) VALUES (?)";
      $statement = $this->connection->prepare($sql);
      $statement->execute([$todoList->getTodo()]);
    }

    function remove(int $number): bool
    {
      // if ($number > sizeof($this->todoList)) {
      //   return false;
      // }
      // for ($i = $number; $i < sizeof($this->todoList); $i++) {
      //   $this->todoList[$i] = $this->todoList[$i + 1];
      // }
      // unset($this->todoList[sizeof($this->todoList)]);
      // return true;

      $sql = "SELECT id FROM todolist WHERE id = ?";
      $statement = $this->connection->prepare($sql);
      $statement->execute([$number]);
      $result = $statement->fetch();
      if ($result) {
        $sql = "DELETE FROM todolist WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);
        return true;
      } else {
        return false;
      }
    }

    function findAll(): array
    {
      // return $this->todoList;

      $sql = "SELECT * FROM todolist";
      $statement = $this->connection->prepare($sql);
      $statement->execute();
      $result = [];

      foreach ($statement->fetchAll() as $row) {
        $todolist = new TodoList();
        $todolist->setId($row['id']);
        $todolist->setTodo($row['todo']);
        $result[] = $todolist;
      }
      return $result;
    }
  }
}
