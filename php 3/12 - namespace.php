<?php
// namespace => menyimpan class di dalam sebuah namespace
    // namespace bisa nested, dan jika ingin mengakses class yang terdapat
        // di dalam namecpace kita perlu menyebutkan namespace nya
    // namespace bagus kketika kita punya beberapa class yang sama,

// tanpa namespace
    class Conflit {

    }
    /*
    class Conflit {
        // error karena class sudah di use
    }
    */

// menggunakan namespace
    // jika ingin gunakan subnamespace kita gunakan \ setelah namespace sebelumnya

    /*
    namespace Data\One {
        class Conflik {
            
        }
    }
    
    namespace Data\Two {
        class Conflik {
            
        }
    }
    
    $conflict1 = new \Data\One\Conflik();
    $conflict2 = new \Data\Two\Conflik();
    */

// function dan constant di namespace
    /*
    namespace Helper {
        function helpMe()
        {
            echo "Help Me" . PHP_EOL;
        }
        
        const APPLICATION = "Belajar PHP OOP";
    }
    */

    // Helper\helpMe();
    // echo Helper\APPLICATION . PHP_EOL;

// global namespace => namespace default saat kita membuat namespace tanpa nama akan disimpan di sebuah global namespace
    /*
    namespace {
        echo "Hello Global Namespace" . PHP_EOL;
    }
    */


    // php ku malah error jadinya ku comment semua :)
    // namespace itu seperti folder