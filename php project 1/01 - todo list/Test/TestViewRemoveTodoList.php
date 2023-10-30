<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("aria");
addTodoList("fadly");
addTodoList("muzaki");
addTodoList("angga");
addTodoList("zaki");

showTodoList();

viewRemoveTodoList();
showTodoList();

viewRemoveTodoList();
showTodoList();