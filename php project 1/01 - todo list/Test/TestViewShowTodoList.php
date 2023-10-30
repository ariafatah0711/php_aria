<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("aria");
addTodoList("malik");
addTodoList("fadly");
addTodoList("muzaki");

viewShowTodoList();