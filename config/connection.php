<?php
    $db = new mysqli("localhost","root","","vtuberpoliban");
    if ($db->connect_error) {
        die("Kesalahan terjadi dalam koneksi database: " . $db->connect_error);
    } else {

    }
?>