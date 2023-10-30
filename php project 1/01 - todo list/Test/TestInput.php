<?php
require_once __DIR__ . "/../Helper/Input.php";

$name = input("name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo "Hello $channel" . PHP_EOL;