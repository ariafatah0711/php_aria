<?php
// variable => merupakan tempat untuk menyimpan data
    // dan dapat digunakan di kode progam selanjutnya
    // di php variable bisa menampung semua data dan dapat berubah rubah tipe datanya

// untuk membuat variable kita gunakan
    // $(dolar) lalu diikuti nama variablenya
    // penamaan variable tidak boleh mengandung spasi

$name = "aria";
$age = 17;

$age = "tujuh belas"; // datanya dapat diubah

echo "Name : ";
echo $name;

echo "\n";
echo "Age  : ";
echo $age;

echo "\n"

// variable variables =? membuat variable dari string value variable
    // fitur ini agak membingungkan jika digunakan secara luas,
    // jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
// untuk membuat variable dari sebuah value variable kita bisa menggunakan $$ diikuti dengan nama variablenya
?>

<?php
$name = "aria";
$$name = "keren"; // jadinya $$nama adalah nama variablenya si aria
// $aria = "keren;

echo "name = ";
echo $name;
echo $aria;