<?php


$hostN = "localhost";
$userN = "root";
$databaseN = "my_school_records"; 
$password = "";


$dsn = "mysql:host=$hostN; dbname=$databaseN;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
      $pdo = new PDO($dsn, $userN, $password, $options);

    if($pdo){
        echo "Connected to the $databaseN database successfully";

    }
} catch (PDOException $e){
    echo $e->getMessage();

}