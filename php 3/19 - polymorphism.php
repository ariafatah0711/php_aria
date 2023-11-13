<?php
// polymorphism => merupakan kemampuan sebuah object berubah bentuk menjadi bentuk lain
    // berasal dari bahasa yunani yang berarti banyak bentuk
    // berhubungan dengan inheritance(pewarisan)

    // parent
    class Progammer
    {
        public string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }
    }

    // child
    class FrontEndProgammer extends Progammer
    {
    }
    
    class BackEndProgammer extends Progammer
    {
    }

    // polymorphism
    class Company
    {
        public Progammer $progammer;
        // jadi nanti kita dapat mengubah datanya mau menjadi apa aja yang
            // merupakan parent, dan child si progammer (pewarisan)

    }
    function sayHello(Progammer $progammer) {
        echo "Hello $progammer->name" . PHP_EOL;
    }

    $company = new Company();
    $company->progammer = new Progammer("aria");
    var_dump($company);
    
    $company->progammer = new FrontEndProgammer("aria");
    var_dump($company);
    
    $company->progammer = new BackEndProgammer("aria");
    var_dump($company);

    sayHello(new Progammer("aria"));
    sayHello(new FrontEndProgammer("aria"));
    sayHello(new BackEndProgammer("aria"));