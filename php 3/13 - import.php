<?php
// import => merupakan import class/function/constant,
    // agar namespace kita tidak perlu cape cape buat banyak class
    require_once "./12 - namespace.php";

// alias => membuat nama lain dari class dan 
    // function agar use bisa di lakukan di class yang sama
    // menggunakan kata kunci as setelah melakukan use
    use Data\One\Conflik as OneConflik;
    use Data\Two\Conflik as TwoConflik;
    use function Helper\helpMe;
    use const Helper\APPLICATION;

    $conflict1 = new OneConflik();
    $conflict2 = new TwoConflik(); // menggunakan namespace Data\Two\Conflik
    // $conflict2 = new Data\Two\Conflik(); // tidak perlu di-deklarasikan lagi dengan namespace Data\Two

    helpMe();
    echo APPLICATION . PHP_EOL;
?>