<?php
// tipe data number
    // int => bilangan bulat 
        // decimal (base 10), hexadecimal (base 16),
        // octa (base 8), binary (base 2)
    // float => bilangan pecahan
// di php kita bisa menambahakan _(garis bawah) dan fungsinya agar lebih enak
// dan _ ini akan di igrone misal 100_000_000 (bisa), 100.000.000 (tidak bisa)
    // untuk negatif bisa di depan angka

// tipe data int
echo "Decimal : "; // base 10
var_dump(1234); // mengetahui tipe datanya]

echo "Octal: "; // base 8
var_dump(0123);

echo "Hexadecimal: "; // base 16
var_dump(0x1A);

echo "Binary: "; // base 2
var_dump(0b11111111);

echo "Underscore in number : "; // pake _
var_dump(1_241_313_223);
echo "\n";

// tipe data float
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000 : ";
var_dump(1.2e3); // 1.2 diklai 000 yang ada 3 = 1.2 x 1000

echo "Floating Point dengan E notation Minu (7 x 0.001";
var_dump(7e-3); // 7 diakali 000.1

echo "Undescore di Floating Point";
var_dump(1_234.567);
echo "\n";

// integer overflow => kapasitas tipe data integer
    // 2147483647 (2 miliar) pada os 32 bit
    // 92233372036854775807 (triliunan) pada os 64 bit
// jika kita membuat number intg yang melebihi data tersebut
    // secara otomatis tipe number nya akan diubah menjadi floating point
echo "Integer Overflow 32 bit : ";
var_dump(2147485848868); // akan di konversi jadi float jika tipe numbernya 32
echo "Integer Overdlow 64 bit : ";
var_dump(9223372036854775808); // dikonversi jadi float karena bates os 64 bit