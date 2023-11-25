<?php
// named argument => memasukan argument/paramter tanpa harus mengikuti posisinya
    // namun penggunaan named argument, kita harus mengikuti posisinya
    // named arguemnt juga menjadikan kode progam mudah dibaca ketika
        // memanggil function yang memilki argument yang sangat banyak

    function sayHello(string $first, string $middle, string $last): void {
        echo "Hello $first $middle $last" . PHP_EOL;
    }

    // without named argument
    sayHello("aria", "fatah", "anom"); // hello aria fatah anom

    // with named argument
    sayHello(last: "anom", first: "aria", middle: "fatah"); // hello aria fatah anom

// function default argument
    function sayGoodBye(string $first, ?string $middle = " ", string $last): void {
        echo "GoodBye $first $middle $last" . PHP_EOL;
    }

    // without named argument
    sayGoodBye("aria", "fatah", "anom");
    // sayHello("aria", "anom"); // error

    // with named argument
    // sayGoodBye(first: "aria", last: "anom"); // seharusnya bisa namun entah kenapa ini error di aku
    // sayGoodBye("aria", last: "anom"); // ini juga harysnya bisa
    
    sayGoodBye("aria", NULL, "anom"); // intinya outputnya akan mejadi seperti ini