<?php 

$dbServername = "localhost";
$dbUsername = "jordanhi_admin";
$dbPassword = "vmpSB#9DA4Tw";
$dbName = "jordanhi_portfolio";

$conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

