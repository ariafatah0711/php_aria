<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("aria");
addTodoList("malik");
addTodoList("fadly");
addTodoList("muzaki");
addTodoList("joko");

showTodoList();

removeTodoList(3);
showTodoList();

removeTodoList(2);
showTodoList();

removeTodoList(4);
showTodoList();

$success = removeTodoList(2);
var_dump($success);

$success = removeTodoList(4);
var_dump($success);

showTodoList();