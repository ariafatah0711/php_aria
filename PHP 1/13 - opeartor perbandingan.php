<?php
// opearator perbandingan => merupakan nilai yang digunakan
    // untuk membandingakan dua buah value
    // dan hasil dari perbandingan adalah boolean (true dan false)

    // $a == $b => sama dengan (tidak termasuk type data)
    // $a === $b => sama dengan (type data)
    // $a != $b => tidak sama dengan (tidak termasuk type data)
    // $a <> $b => tidak sama dengan (tidak termasuk type data)

    // $a !== $b => tidak sama (termasuk type data)
    // $a < $b => kurang dari
    // $a <= $b => kurang dari / sama dengan
    // $a > $b => lebih dari
    // $a >= $b => lebih dari / sama dengan

    var_dump("10" == 10);
    var_dump("10" === 10); // (termasuk type data)

    var_dump(10 < 9); // false
    var_dump(9 > 9); // false
    var_dump(9 >= 9); // true karena dia adda =