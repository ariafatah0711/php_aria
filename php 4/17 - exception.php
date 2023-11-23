<?php
// exception => memebuat class exception sendiri ketika error terjadi
    // exception biasanya terjadi di function
    // kita gunakan kata kunci throw diikuti dengan object exceptionya

// kita bisa membuat class yang implementasi interface Throwable
    // class ValidationException implements Throwable {} // namun ini tidak di sarankan karena terlalu banyak functionya

// kita gunakan ini agar lebih mempermudah
    // kita gunakan kata kunci throw diikuti dengan object exceptionya
    class ValidationException extends Exception
    {
        
    }
    
    // contoh
    class LoginRequest {
        public string $username;
        public string $password;
    }

    function validateLoginRequest(Loginrequest $loginRequest) {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("Username is null");
        } else if (!isset($loginRequest->password)) {
            throw new ValidationException("Password is null");
        } else if ($loginRequest->username == "") {
            throw new Exception("Username is blank");
        } else if ($loginRequest->password == "") {
            throw new Exception("Password is blank");
        }
    }

    $loginRequest = new LoginRequest();
    $loginRequest->username = "aria";
    $loginRequest->password = "aria123";

    validateLoginRequest($loginRequest); // ketika ini error progam akan berhenti
    echo "valid" . PHP_EOL;