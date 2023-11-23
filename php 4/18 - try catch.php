<?php
// try catch => menangkap exceptionya yang terjadi, agar progam tidak berhenti
    // cara menggunakan kita menggunakan block try
        // lalu panggil method yang bisa menyebabkan exception
    require_once "./17 - exception.php";

    echo PHP_EOL;
    $loginRequest = new LoginRequest();
    $loginRequest->username = "aria";
    $loginRequest->password = "123";
    
    // $loginRequest->username = "";
    $loginRequest->password = ""; // error nya exxception

    try {
        validateLoginRequest($loginRequest); // jika error progam ini akan langsung ke catch
        echo "valid" . PHP_EOL; // progam ini akan jalan hanya ketika progam sebelumnya tidak terjadi error
    } catch(ValidationException $exception) {
        echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    } catch(Exception $exception) {
        // error untuk exception yang blank
        echo "Exception Error : {$exception->getMessage()}" . PHP_EOL;
    }

// multiple try catch(2) => jika ingin membuat pesan kesalahan
    // tapi hanya menggunakan 1 catch
    // tinggal menggunakan | / or di dalam paramter catch
    echo PHP_EOL;
    $loginAria = new LoginRequest();
    $loginAria->username = "";
    $loginAria->password = "";

    try {
        validateLoginRequest($loginAria);
    } catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    }
    // artinya kita dapat menangkap 2 jenis class exception

// finally keyword => menambahkan block finaly yang akan selalu di eksekusi
    // baik terjadi exception atau tidak
    // ini berguna ketika setelah progam selesai kita wajib menutup koneksi ke file tersebut agar tidak menggangu di memory
    echo PHP_EOL;
    $loginMalik = clone $loginAria;
    $loginMalik->username = "malik";
    $loginMalik->password = "123";

    try {
        validateLoginRequest($loginMalik);
        echo "valid" . PHP_EOL;
    } catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;
    } finally {
        echo "Error gak Error tetap di panggil" . PHP_EOL;
        // dan cocok untuk menutup file agar tidak memakan banyak memory
    }

// debug exception => jika ingin tahu dimana letak kesalahanya
    // menggunakan function getTrace()
    // function ini berisikan informasi dari exception yang terjadi
        // seperti lokasi file, baris ke berapa
        // function mana, sampi argument yang di kirim function tersebut
    // ini sangat cocok untuk debuging
    echo PHP_EOL;
    $loginZaki = clone $loginAria;
    $loginZaki->username = "zaki";
    // $loginZaki->password = "123";

    try {
        validateLoginRequest($loginZaki);
        echo "valid" . PHP_EOL;
    } catch (ValidationException | Exception $exception) {
        echo "Error : {$exception->getMessage()}";

        // sebagai string => seperti error di php biasanya
        echo "$exception->getTraceAsString()" . PHP_EOL;

        // dump trace => informasi lengkap
        var_dump($exception->getTrace());
    } finally {
        echo "Error gak Error tetap di panggil" . PHP_EOL;
        // dan cocok untuk menutup file agar tidak memakan banyak memory
    }