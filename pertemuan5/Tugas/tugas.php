<?php 
    $pemasukan=50000000;
    $hutang_a=16500000;
    $bunga_hutang_a=5/100;
    $hutang_b=9500000;
    $bunga_hutang_b=4.5/100;
    
    //fungsi penjumlahan
    $sisa_uang= $pemasukan - ($hutang_a + ($hutang_a * $bunga_hutang_a) + $hutang_b + ($hutang_b * $bunga_hutang_b));
    $total_bunga_hutang= ($hutang_a * $bunga_hutang_a) + ($hutang_b * $bunga_hutang_b);
    $total_hutang= $hutang_a + ($hutang_a * $bunga_hutang_a) + $hutang_b + ($hutang_b * $bunga_hutang_b);

    echo "$sisa_uang \n";
    echo "$total_bunga_hutang \n";
    echo "$total_hutang";
?>