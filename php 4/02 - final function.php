<?php
// final function => function tidak bisa di override(ditimpa)
    // jika sebuah function kita tambahkan kata kunci final
    // maka function tidak bisa di override di class childnya
    // ini sangat cocok jika kita ingin mengunci implementasi dari
        // sebuah method agar tidak bisa diubah lagi oleh class child nya

    class SocialMedia
    {
        public string $name;
    }

    class Facebook extends SocialMedia // class ini tidak bisa di wariskan lagi
    {
        final public function login(string $username, string $password): bool {
            return true;
        }
    }

    class FakeFacebook extends Facebook
    {
        // error karena function login sudah di final dan tidak bisa di override lagi
        /*
        public function login(string $username, string $password): bool {
            return false;
        }
        */
    }

    $ariaFake = new FakeFacebook();
    echo "{$ariaFake->login("aria", 123)}";