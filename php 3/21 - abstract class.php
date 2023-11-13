<?php
// abstract class => class tersebut tidak bisa dibuat object secara langsung
    // dan hanya bisa diturunkan. lalu di buat object di class turunanya
    // menggunakan kata kunci abstract di sebelum kata kunci class

    namespace Data;
    abstract class Location
    {
        public string $name;
    }

    class City extends Location
    {
        public function __construct() {
            $this->name = "City";
        }
    }
    
    class Country extends Location
    {
        public function __construct() {
            $this->name = "Country";
        }
    }

    use Data\{Location, City, Country};
    // $location = new Location(); // error
    $depok = new City();
    echo "Depok Is $depok->name" . PHP_EOL;

    $indonesia = new Country();
    echo "indonesia is $indonesia->name" . PHP_EOL;