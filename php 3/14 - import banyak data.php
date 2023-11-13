<?php
// group use declaration => melakukan import banyak hal di satu grup yang sama
    // menggunakan {}
    namespace Datasatu;
    class Conflict {        
        public string $no = "1";
    }
    class Sample {
    }
    class Dummy {
    }
    
    namespace Data\Dua;
    class Conflict {
        public string $no = "2";
    }
    class Sample {
    }
        
    use Datasatu\{Conflict as Conflict1, Sample as Sample1, Dummy as Dummy1};
    use Data\Dua\{Conflict as Conflict2, Sample as Sample2};

    $conflict1 = new Conflict1();
    var_dump($conflict1);

    $conflict2 = new Conflict2();
    var_dump($conflict2);
?>