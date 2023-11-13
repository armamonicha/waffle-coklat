<?php
    // Contoh variabel umur
    $belanja = 5000;

    // Percabangan if/else if/else
    if ($belanja < 20000) {
        echo "Tidak Mendapatkan Diskon:(";
    } elseif ($belanja >= 20000 && $belanja < 100000) {
        echo "Mendapatkan Diskon 5%";
    } else {
        echo "Mendapatkan Diskon 7%";
    }
?>