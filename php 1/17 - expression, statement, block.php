<?php
// expression, statment, dam block

// Expression => merupakan apapun yang memiliki nilai atau value
    // contoh $a = 5 => 5nya adalah expression
    // lalu jika $b = $a => dia juga expresion karena $a = 5
    // expression complex getValue() berniali angka 100 itu juga expression
    $a = 5; // expression
    $b = $a; // $a = 5 expresion
    function getValue() {
        return 100; // expression
    };
    $value = getValue();

// statment => kalimat lengkap yang berisi execuition dan diakhiri titik koma
    // contohh echo "aria"; => 1 baris itu adalah statemnt
    $name = "aria fatah anom"; // 1 baris ini adalah statment
    echo $name; // ini juga statement
    $date = new DateTime(); // ini jua statement

// block => merupakan kumpulan statment yang terdiri dari nol atau lebih statemnt
    // blobk di awali  dan diakhiri dengan kurung kurawal
    echo "\n";
    echo "\n";
    function runApp($name) {
        echo "Stat Progam" .  PHP_EOL;
        echo "Hello Progam" .  PHP_EOL;
        echo "End Progam" .  PHP_EOL;
    };
    $run1 = runApp("aria");
    var_dump($run1);