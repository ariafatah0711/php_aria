<?php
// attribute target => membatasi hanya bisa digunakan di atribute tertentu
    // kita tambahkan informasi ketika membuat class atribute

    // atribut class => merupakan class biasa
        // yang bisa meanmbahkan property, function/method, dan constructor
        // ini cocok ketika kita butuh menambahkan informasi tambahan di atribut classnya
    #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
    class Length {
        var int $min;
        var int $max;
        
        public function __construct(int $min, int $max) {
            $this->min = $min;
            $this->max = $max;
        }
    }

    class LoginRequest
    {
        #[NotBlank]
        #[Length(min: 4, max: 10)] // jadi username akan mengecek apakah min 4 dan max 10
        var string $username;

        #[NotBlank]
        #[Length(min: 8, max: 10)]
        var string $password;

    }

    // membuat attribute class instance
    function validate(object $object): void
    {
        $class = new ReflectionClass($object);
        $propeties = $class->getProperties();
        foreach ($propeties as $property) {
            validateNotBlank($property, $object); // ini aka di panggil ketika validate di panggil
            validateLength($property, $object);
        }
    }

    function validateNotBlank(ReflectionProperty $property, object $object): void {
        $attributes = $property->getAttributes(NotBlank::class);
        if (count($attributes) > 0) {
            if (!$property->isInitialized($object))
                throw new Exception("property $property->name is null");
            if (!$property->getValue($object) === null)
                throw new Exception("Property $property->name is null");
        }
    }

    // mengecek min dan max
    function validateLength(ReflectionProperty $property, object $object): void {
        if (!$property->isInitialized($object) || $property->getValue($object) == null)
            return; // cancel validatioon ketika data nya belum di isi dan berisi null
        
        $value = $property->getValue($object);
        $attributes = $property->getAttributes(Length::class); // mengambil atribute milik si Length

        foreach ($attributes as $attribute) {
            $length = $attribute->newInstance(); // mengetahui panjang attributenya
            if (strlen($value) < $length->min)
                throw new Exception("Property $property->name size is too short");
            if (strlen($value) > $length->max)
                throw new Exception("Property $property->name size is too long");
        }
    }

    $request = new LoginRequest();
    $request->username = "aria"; // 4 huruf
    $request->password = "12345678"; // 8 huruf
    validate($request);