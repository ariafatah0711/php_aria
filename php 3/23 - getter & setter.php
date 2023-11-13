<?php
// encapsulation => memastikan data sensitif sebuah object tersembunyi dari akses luar
    // hal ini bertujuan agar kita bisa menjaga sebuah object tetap baik dan valid
    // untuk mencapai ini kita membuat sebuah propeties yang menggunakan acces modifier privat
    // agar bisa diubah kita menyediakan function untuk mengubah dan mendapatkan propeties tersebut

// getter dan setter => proses encapsulation yang sudah dibuat standarisasinya
    // getter => merupakan function yang digunakan untuk mengambil data field
    // setter => merupakan function yang digunakan untuk mengubah data field

    // tipe data     | getter method        | setter method
    // boolean       | isXxx(): bool        | setXxx(bool value)
    // lainya        | getXxx(): tipeData   | setXxx(tipeData Value)

    class Category
    {
        private string $name;
        private bool $expensive;

        public function getName(): string {
            return $this->name;
        }
        
        public function setName(string $name) {
            if (trim($name) != "") {
                $this->name = $name;
            }
        }

        public function isExpensive(): bool {
            return $this->expensive;
        }

        public function setExpensive(bool $expensive) {
            $this->expensive = $expensive;
        }
    }

    // menggunakan getter dan setter
    $category = new Category();
    $category->setName("car");
    $category->setExpensive(true);

    echo "Name : {$category->getName()}" . PHP_EOL;
    echo "Expensive : {$category->isExpensive()}" . PHP_EOL;