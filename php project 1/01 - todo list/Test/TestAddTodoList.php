<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("aria");
addTodoList("fadly");
addTodoList("muzaki");

var_dump($todoList);