<?php
// visibility\Access Modifier => merupakan kemampuan propeties, function dan constant
    // dapat di akses dari mana saja(public)
    // secara default semua propeteis, function dan constant dapat di akses dari mana saja(public)
    // saat kita menggunakan kata kunci var untuk propeties nya adalah public

    // access level
    /*
    modifier | Class | SubClass | World
    public   | Y     | Y        | Y
    protected| Y     | Y        | N
    private  | Y     | N        | N
    */

    // public => filed, propeties dapat di akses di class yang sama, luar class, maupun turunanya
    // protected => hanya bisa di akses dari dalam class dan class turunanya
        // namun tidak dapat di akses dari luar
    // private => tidak bisa di akses dari manapun dan hanya class itu sendiri

        // class => class itu sendiri
        // subclass => turunan / class child
        // word => luar class

    class Product
    {
        private string $name; // private access
        private int $price;

        protected string $version; // version

        public function __construct(string $name, int $price) { // public access
            $this->name = $name;
            $this->price = $price;
        }

        // menampilkan data => public access
        public function getName(): string {
            return $this->name;
        }
        public function getPrice(): int {
            return $this->price;
        }
    }

    $product = new Product("apple", 10_000);

    // echo $product->name = "Orange"; // error karena di akses dari luar
    // echo $product->price = 7_000; // error

    // jika ingin akses nama dan price gunakan funtion dari classnya
    echo $product->getName() . PHP_EOL;
    echo $product->getPrice() . PHP_EOL;

// protected
    class ProductDummy extends Product
    {
        public function info() {
            // echo "Name $this->name" . PHP_EOL; // error karena turunya name adalah private
            echo "version $this->version" . PHP_EOL;
        }

        public function __construct(string $version) {
            $this->version = $version;
        }
    }

    $dummy = new ProductDummy("1.1");
    $dummy->info();