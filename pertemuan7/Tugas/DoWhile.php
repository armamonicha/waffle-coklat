<?php
    // Mencetak pola bintang menggunakan perulangan do/while
    $rows = 20; // Jumlah baris
    $i = 1;

    do {
        $j = 1;
        do {
            echo "* ";
            $j++;
        } while ($j <= $i);
        $i++;
    } while ($i <= $rows);
?>
