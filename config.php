<?php
    $hostname   = 'localhost';
    $username   = 'root';
    $password   = '';
    $dbname     = 'mycreep';

    $conn       = mysqli_connect($hostname, $username, $password, $dbname) or die
                    ('server tidak terhubung')

?>