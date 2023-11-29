<?php
// nulsafe operator => ketika ingin mengecek apakah object tersbut bernilai null atau tidak
    // menggunakan karakter ? (tanda tanya), secara otomatis php akan melakukan pengecekan null tersebut

// manual null check
    class Address
    {
        public ?string $country;
    }

    class User
    {
        public ?Address $address;
    }

    function getCountry(?User $user): ?string {
        if ($user !=null) {
            if ($user->address != null) {
                return $user->address->country;
            }
        }
        return null;
    }

    echo getCountry(null) . PHP_EOL;

// nulllsafe operator
    function getNegara(?User $user): ?string {
        return $user?->address?->country;
        // jadi dia mengecek satu persatu 
            // jika user tidak null dia akan mengecek si address dan jika adress dia null maka akan menjadi null returnya
    }

    echo getNegara(null) . PHP_EOL;