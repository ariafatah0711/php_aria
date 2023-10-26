<?php
// nested array => array di dalam array
    $aria = array(
        "id" => "aria",
        "name" => "aria fatah",
        "age" => 17,
        "address" => [
            "country" => "indonesia",
            "city" => "jakarta"
        ]
    );
    var_dump($aria["name"]);
    var_dump($aria["address"]["country"]); // mengambil array di dalam array