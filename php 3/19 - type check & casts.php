<?php
// type check dan casts => koversi
    // koversi tipe data dan bukan class
    // khusus untuk tipe data object kita tidak perlu melakukan koversi secara eksplisit
    // namun agar aman, sebelum melakukan casts, pastikan melakukan type check(pengecekan tipe data)
        // dengan menggunakan kata kunci istanceof
    // hasiil operator instanceof adalah boolean, true jika sesuai dan false jika tidak

    // mengeeck apakah sebuah object ini tipe data class atau bukan
    class Progammer
    {
        public string $name;
        public function __construct(string $name) {
            $this->name = $name;
        }
    }
    // child
    class FrontEndProgammer extends Progammer{}
    class BackEndProgammer extends Progammer{}
    // polymorphism
    class Company
    {
        public Progammer $progammer;
    }

// type check dan casts
    function sayHello(Progammer $progammer) {
        if ($progammer instanceof FrontEndProgammer) {
            echo "Hello FrontEnd $progammer->name" . PHP_EOL;
        } else if ($progammer instanceof BackEndProgammer) {
            echo "Hello BackEnd $progammer->name" . PHP_EOL;
        } else {
            echo "Hello progammer $progammer->name" . PHP_EOL;
        }
    }

    sayHello(new Progammer("aria"));
    sayHello(new FrontEndProgammer("aria"));
    sayHello(new BackEndProgammer("aria"));