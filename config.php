<?php
    $hostname   = 'localhost';
    $username   = 'root';
    $password   = '';
    // $dbname     = 'db_mycreep';
    $dbname     = 'mycreep';

    $conn       = mysqli_connect($hostname, $username, $password, $dbname) or die
                    ('server tidak terhubung')

?>