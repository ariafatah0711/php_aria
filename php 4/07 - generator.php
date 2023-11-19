<?php
// generator => membuat iterator secara otomatis
    // hanya menggunakan kata kunci yield

// manual
    function getGenap(int $max): Iterator {
        $array = [];
        for ($i = 1; $i <= $max; $i++) {
            if ($i % 2 == 0) {
                $array[] = $i;
            }
        }

        return new ArrayIterator($array);
    }

    foreach(getGenap(20) as $value) {
        echo "Genap : $value" . PHP_EOL;
    }
    echo PHP_EOL;

// otomatis
    function getGanjil(int $max): Iterator {
        for ($i= 0; $i <= $max; $i++) {
            if ($i % 2 == 1) {
                yield $i; // mirip return namun dikembalikan menjadi iterator 
            }
        }
    }

    $ganjil = getGanjil(20);
    foreach($ganjil as $value) {
        echo "Ganjil : $value" . PHP_EOL;
    }
    echo PHP_EOL;

// jika mau ada key value hanya perlu menambahkan
// yield key => value
// jika menggunakan class yang sebelumnya kita bisa gunakan seperti ini
class Data implements IteratorAggregate // interface bawaan php
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    // public function getIterator(): Traversable {
    public function getIterator(): Iterator {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data = new Data();

foreach($data as $key => $value) {
    echo "$key : $value" . PHP_EOL; // hanya tampil yang propeties public saja
}