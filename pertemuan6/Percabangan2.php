<?php
    // Contoh variabel jenis kelamin
    $jenis_kelamin = '';

    // Percabangan switch/case
    switch ($jenis_kelamin) {
        case 'Pria':
            echo "Selamat datang, Pak!";
            break;
        case 'Wanita':
            echo "Selamat datang, Bu!";
            break;
        default:
            echo "Selamat datang!";
            break;
    }
?>