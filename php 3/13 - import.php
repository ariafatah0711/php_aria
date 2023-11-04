<?php
// import => merupakan import class/function/constant,
    // agar namespace kita tidak perlu cape cape buat banyak class
    require_once "./12 - namespace.php";

    /*
    use Data\One\Conflit;
    // use Data\Two\Conflit; // ga bisa di declarasi lagi karena sudah ada Conflit

    use function Helper\helpMe;
    use Const helper\APPLICATION;
    
    $conflict1 = new Conflit();
    $conflict2 = new Conflit(); // namun dia akan mengambil Data\one
    $conflict2 = new Data\Two\Conflict(); // harus di declarasi lagi Data nya
    
    helpMe();
    echo APPLICATION . PHP_EOl;
    */

// alias => membuat nama lain dari class dan 
    // function agar use bisa di lakukan di class yang sama
    // menggunakan kata kunci as setelah melakukan use
    
    /*
    use Data\One\Conflict as Conflict1;
    use Data\Two\Conflict as Conflict2;
    
    use function Helper\helpMe as help;
    use const Helper\APPLICATION as APP;
    
    $conflict1 = new Conflict1;
    $conflict2 = new Conflict2;
    
    help();
    echo APP . PHP_EOL;
    */

// group use declaration => melakukan import banyak hal di satu grup yang sama
    // menggunakan {}
    /*
    namespace Data\Satu {
        class Conflict {
            
        }
        class Sample {
            
        }
        class Dummy {
            
        }
    }
    namespace Data\Dua {
        class Conflict {
            
        }
        class Sample {
            
        }
    }
    use Data\Satu\{Conflict as Conflict1, Sample as Sample1, Dummy as Dummy1};
    use Data\Dua\{Conflict as Conflict2, Sample as Sample2};
    */