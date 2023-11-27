<?php
// union types => menambahkan lebih dari satu tipe data
    // ke property, argument/parameter, dan return value

    // menggunakan tanda | diikuti dengan type data selanjutnya
    
// property
    class Example
    {
        // property
        public string|int|bool $data; // artinya kita bisa mendefinisikan beberapa tipe data sekaligus
    }

    $example = new Example();
    $example->data = "Aria";
    $example->data = 1;
    $example->data = true;
    // $example->data = ["aria", "fatah"]; // akan error karena array tidak di definisikan

// argument
    function sampleFunction(string|array $data): void {
        if (is_string($data)) {
            echo "Argument is String" . PHP_EOL;
        } else if (is_array($data)) {
            echo "Argument is Array" . PHP_EOL;
        }
    }

    sampleFunction("aria"); // string
    sampleFunction(["aria", "fatah"]); // array

// return value
    echo PHP_EOL;
    function unionRetrun(string|array $data): string|array {
        if (is_string($data)) {
            return "Response string";
        } else if (is_array($data)) {
            return ["Response", "data", "array"];
        }
    }

    echo unionRetrun("aria") . PHP_EOL;
    // echo unionRetrun(["aria", "fatah"]) . PHP_EOL; // ada warning karena array tidak bisa di echo

    var_dump(unionRetrun(["aria", "fatah"]));