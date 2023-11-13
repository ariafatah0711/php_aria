<?php
// namespace => menyimpan class di dalam sebuah namespace
    // namespace bisa nested, dan jika ingin mengakses class yang terdapat
        // di dalam namecpace kita perlu menyebutkan namespace nya
    // namespace bagus kketika kita punya beberapa class yang sama,

    /*
        project/
    |-- Data/
    |   |-- One/
    |   |   |-- Conflik.php
    |   |
    |   |-- Two/
    |       |-- Conflik.php
    |
    |-- main.php
    */


// tanpa namespace
    // class Conflit {

    // }
    /*
    class Conflit {
        // error karena class sudah di use
    }
    */

// menggunakan namespace
    // jika ingin gunakan subnamespace kita gunakan \ setelah namespace sebelumnya
    namespace Data\One;
    class Conflik {
        
    }
    
    namespace Data\Two;
    class Conflik {        
        
    }
    
    use Data;
    $conflict1 = new Data\One\Conflik();
    $conflict2 = new Data\Two\Conflik();
?>

<?php
// function dan constant di namespace
namespace Helper;
    function helpMe()
    {
        echo "Help Me" . PHP_EOL;
    }
    
    const APPLICATION = "Belajar PHP OOP";

    use Helper;
    Helper\helpMe();
    echo Helper\APPLICATION . PHP_EOL;
    
    // global namespace => namespace default saat kita membuat namespace tanpa nama akan disimpan di sebuah global namespace
    /*
    namespace {
        echo "Hello Global Namespace" . PHP_EOL;
    }
    */

    // namespace itu seperti folder
?>