<?php

$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

try{
    $connect = new PDO($dsn, $username, $password);
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
}

catch(PDOException $e){
    echo "เชื่อมต่อล้มเหลว<br>" . $e->getMessage();
}

?>