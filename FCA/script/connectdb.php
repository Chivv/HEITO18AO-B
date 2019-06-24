<?php
$host = 'localhost';
$dbname = 'FCA';
$username = 'root';
$password = 'Root';
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$sql = "SELECT * FROM Customer";

?>
