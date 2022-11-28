<?php 

$dbServername = "localhost";
$dbUsername = "jordanhi_admin";
$dbPassword = "W2WHbDW_%=rE";
$dbName = "jordanhi_portfolio";


try {
    $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}

