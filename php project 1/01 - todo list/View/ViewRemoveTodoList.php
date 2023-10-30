<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomer (X untuk membatalkan)");
    if ($pilihan == "x") {
        echo "batal menghapus todo" . PHP_EOL;
    } else {
        $succes = removeTodoList($pilihan);
        if ($succes) {
            echo "sukses menghapus todo nomer $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus todo nomer $pilihan" . PHP_EOL;
        }
    }
}