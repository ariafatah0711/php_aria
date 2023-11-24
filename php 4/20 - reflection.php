<?php
// reflection => membaca struktur kode pada saat aplikasi sedang berjalan
    // fitur yang biasanya digunakan untuk membuat framework
    
    // membuat validation framework menggunakan reflection
    // kita hanya akan mengecek apakah propeties bernilai null atau tidak
        // kalo null atau belum di set kita akan throw ValidationException
        // tanpa reflection biasanya kita akan melakukan ini secara manual

// tanpa reflection
    class ValidationException extends Exception{}
    class LoginRequest {public ?string $username; public ?string $password;}

    class ValidationUtil
    {
        static function validate(LoginRequest $loginRequest) {
            if (!isset($loginRequest->username)) {
                throw new ValidationException("username is null");
            } else if (!isset($loginRequest->password)) {
                throw new ValidationException("password is null");
            } else {
                echo "login berhasil" . PHP_EOL;
            }
        }

        // register

        // create product
    }

    $result = new LoginRequest();
    $result->username = "aria";
    $result->password = "123";
    ValidationUtil::validate($result); // progam sudah benar
    // namun kita perlu membuat validate lagi yang register, create product,  dll

// menggunakan reflection
    class ValidationUtilReflection
    {
        static function validateReflection($request) {
            // membuat object ReflectionClass yang memilki data / class $request
            $reflection = new ReflectionClass($request);

            // mengambil semua propety dan dapat memilih tipe apa ::IS_PUBLIC
            $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
            echo PHP_EOL . "isi data propety";
            var_dump($properties);

            // mengecek setiap propety nya dan jika ada yang null / isset maka akan langsung ke detect
            foreach ($properties as $property) {
                if (!$property->isInitialized($request)) {
                    throw new ValidationException("$property->name is not set");
                } else if (is_null($property->getValue($request))) {
                    throw new ValidationException("$property->name is null");
                } else {
                    echo "Berhasil" . PHP_EOL;
                }
            }
        }
    }

    $result = new LoginRequest();
    $result->username = "aria";
    $result->password = "123";
    // $result->password = null;

    ValidationUtilReflection::validateReflection($result);
    // jadi class ReflectionClass dapat melihat sebuah isi dari class dari property dll

// jadi kita bisa validate tanpa harus membuat 1 persatu
    class RegisterUserRequest {public ?string $name; public ?string $address; public ?string $email;}

    $register = new RegisterUserRequest();
    $register->name = "aria";
    $register->address = "Indonesia";
    $register->email = null;

    ValidationUtilReflection::validateReflection($register);