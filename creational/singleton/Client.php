<?php

require_once "./ConnectDatabase.php";
// require_once "./ConnectDb.php";

echo "<h3>Singletone</h3><hr>";
echo "Koneksi <br>";
$instance_1 = ConnectDatabase::getInstance();
$conn_1 = $instance_1->getConnection();
var_dump($conn_1);
echo "Koneksi 2<br>";
$instance_2 = ConnectDatabase::getInstance();
$conn_2 = $instance_2->getConnection();
var_dump($conn_2);


// echo "<br>";
// echo "<h3>Non Singletone</h3><hr>";
// $instance_3 = new ConnectDb();
// $conn_3 = $instance_3->getConnection();
// var_dump($conn_3);
// echo "<br>";
// $instance_4 = new ConnectDb();
// $conn_4 = $instance_4->getConnection();
// var_dump($conn_4);
