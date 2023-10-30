<?php

require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("aria");
addTodoList("malik");
addTodoList("fadly");

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();