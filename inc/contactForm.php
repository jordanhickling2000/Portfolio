<?php
    include_once 'dbh.php';

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO contact_form (firstname, lastname, email, subject, message) VALUES ('$fname', '$sname', '$email', '$subject', '$message')");
        $stmt->bindParam(':firstname', $fname);
        $stmt->bindParam(':lastname', $sname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    var_dump($_POST);
    header("Location: ../index.php?contact=success");
    } catch (Exception $e) {
        echo "Error Connecting To Database";
}
