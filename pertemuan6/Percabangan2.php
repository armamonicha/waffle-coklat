<?php
    // Contoh variabel jenis kelamin
    $jenis_kelamin = 'Pria';

    // Percabangan switch/case
    switch ($jenis_kelamin) {
        case 'Pria':
            echo "<p>Selamat datang, Pak!</p>";
            break;
        case 'Wanita':
            echo "<p>Selamat datang, Bu!</p>";
            break;
        default:
            echo "<p>Selamat datang!</p>";
            break;
    }
?>