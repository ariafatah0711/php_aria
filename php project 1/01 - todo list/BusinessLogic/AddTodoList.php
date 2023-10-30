<?php

// menambahkan todolist
function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1; // mengetahui panjang dari isi todo list
    $todoList[$number] = $todo;
}