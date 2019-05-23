<?php
    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $db = new PDO($dsn, $user, $password);
    $db->exec("UPDATE zwierzeta_domowe SET nazwa='Reksio' WHERE id=3");
?>