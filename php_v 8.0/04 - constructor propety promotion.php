<?php
// constructor property promotion
    // kadang kita sering sekali membuat property sekaligus
    // mengisi property tersebut menggunakan constructor

    // sekarang kita bisa otomatis langsung membuat property dengan via constructor
    // fitur ini mirip sekali di bahasa pemograman seperti kotlin dan typescript

// without promotion => mengakses satu persatu di constructor
    class Product
    {
        var string $id;
        var string $name;
        var int $price;
        var int $quantity;

        public function __construct(string $id, string $name, int $price, int $quantity) {
            $this->id = $id;
            $this->name = $name;
            $this->quantity = $quantity;
        }
    }

// with promotion => jadi kita tidak perlu memasukan propertynya secara manual
    //  karena sudah otomatis ditambahkan saat memanggil class / constructor function
    class ProductPromotion
    {
        public function __construct(
            public string $id,
            public string $name,
            public int $price = 0,
            public int $quantity = 0,
            private bool $expensive = false,
        ) {
            // 
        }
    }

    $product1 = new ProductPromotion(id: "1", name: "Mie Ayam", price: 15_000);
    var_dump($product1);

    echo $product1->name;