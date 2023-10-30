<?php

function input(string $info): string
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result); // agar spasi kanan kiri nya ilang
}