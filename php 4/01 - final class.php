<?php
// final class => merupakan kata kunci yang digunakan, 
    // agar class tidak bisa di warisi lagi
    // menggunakan kata kunci final sebelum class
    class SocialMedia
    {
        public string $name;
    }

    final class Facebook extends SocialMedia // class ini tidak bisa di wariskan lagi
    {
    }

    // error
    // class FakeFacebook extends Facebook{}