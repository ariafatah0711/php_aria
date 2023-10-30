<?php

// menghapus todolist
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    // unset($todoList[$number]); // jika pakai unset nanti datanya misal hapus data ke 2 akan jadi 1.aria 2. 3.angga

    // kita pakai logic kita memindahkan data yang ingin di hapus ke terakhir lalu di hapus
        // dan membuat data yang setelah $number di +1
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;
}