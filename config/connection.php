<?php
    $db = new mysqli("db", "user", "password", "vtuberpoliban");
    if ($db->connect_error) {
        die("Kesalahan terjadi dalam koneksi database: " . $db->connect_error);
    } else {
        // Koneksi berhasil
    }
?>
