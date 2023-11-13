<?php
    // Contoh variabel umur
    $belanja = 20000;

    // Percabangan if/else if/else
    if ($belanja < 20000) {
        echo "<p>Tidak Mendapatkan Diskon:(.</p>";
    } elseif ($belanja >= 20000 && $belanja < 100000) {
        echo "<p>Mendapatkan Diskon 5%.</p>";
    } else {
        echo "<p>Mendapatkan Diskon 7%.</p>";
    }
?>