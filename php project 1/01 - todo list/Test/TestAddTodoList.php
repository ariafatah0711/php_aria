<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("aria");
addTodoList("fadly");
addTodoList("muzaki");

var_dump($todoList);