<?php

// require_once "./Model/TodoList.php";
// require_once "./Helper/Input.php";

// require_once "./BusinessLogic/ShowTodoList.php";
// require_once "./BusinessLogic/AddTodoList.php";
// require_once "./BusinessLogic/RemoveTodoList.php";
// require_once "./View/ViewShowTodoList.php";
// require_once "./View/ViewAddTodoList.php";
// require_once "./View/ViewRemoveTodoList.php";

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;
echo __DIR__ . PHP_EOL; // tempat akses directorynya

viewShowTodoList();

