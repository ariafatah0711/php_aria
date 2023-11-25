<?php
// attributes => menambahkan metadata terhadap kode progam yang kita buat
    // fitur ini merupakan fitur baru
    // jika di java bernama Anotation, atribut di C#, atau decorator di Python dan Javascript

// $[] => atribut bisa digunakan di berbeagai tempat seperti class, function, method, property, class Constant, dan paramter
    // menggunakan #[NamaAttribute] di target yang kita tentukan
    #[Attribute]
    class NotBlank
    {

    }

    class LoginRequest
    {
        #[NotBlank] // jadi username akan memilki informasi tambahan yaitu NotBlank
        public ?string $username;

        #[NotBlank]
        public ?string $password;
    }

    // membaca attribute via reflection
    
    function validateNotBlank(ReflectionProperty $property, object $object): void {
        // jadi data yang akan di cek hanya yang memilki atribute NotBlank
        $attributes = $property->getAttributes(NotBlank::class);

        // hanya mengecek jika attributes yang memilki NotBlank memilki data lebih dari 0
        if (count($attributes) > 0) {
            if (!$property->isInitialized($object))
                throw new Exception("property $property->name is null");
            if (!$property->getValue($object) === null)
                throw new Exception("Property $property->name is null");
        }
    }

    function validate(object $object): void
    {
        $class = new ReflectionClass($object);
        $propeties = $class->getProperties();
        foreach ($propeties as $property) {
            validateNotBlank($property, $object);
        }
    }

    $request = new LoginRequest();
    $request->username = "aria";
    $request->password = "123";
    $request->password = null;

    validate($request);

// attribute target => 