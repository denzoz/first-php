<?php

$host = 'localhost';
$port = 3306;
$user = "root";
$pass = "";
$db = "phpFirst";
$charset = 'utf8mb4';


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $pass, $db, $port);
    $conn->set_charset($charset);
} catch (\mysqli_sql_exception $e) {
     throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
}
unset($host, $db, $user, $pass, $charset);