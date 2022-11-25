<?php
    include_once 'dbh.php';

    $fname = input_cleaner($_POST['fname']);
    $sname = input_cleaner($_POST['sname']);
    $email = input_cleaner($_POST['email']);
    $subject = input_cleaner($_POST['subject']);
    $message = input_cleaner($_POST['message']);


    // $cleanEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

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
        header("Location: ../index.php");
    } catch (Exception $e) {
        echo "Error Connecting To Database";
}

    // function input_cleaner($input) {
    //     $input = trim($input);
    //     $input = stripslashes($input);
    //     $input = htmlspecialchars($input);
    //     return $input;
    // }

    function input_cleaner($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return preg_replace("/&#?[a-z0-9]+;/i","", $input); // Removes special chars.
     }

