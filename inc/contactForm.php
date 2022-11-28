<?php

function input_cleaner($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return preg_replace("/&#?[a-z0-9]+;/i","", $input); // Removes special chars.
 }


    $fname = input_cleaner($_POST['fname']);
    // echo var_dump($fname);
    $sname = input_cleaner($_POST['sname']);
    $email = input_cleaner($_POST['email']);
    // echo var_dump($email);
    $subject = input_cleaner($_POST['subject']);
    $message = input_cleaner($_POST['message']);


    // $cleanEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    try {
        // echo var_dump("test1");
        $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO contact_form(firstname, lastname, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        // echo var_dump("test2");
        $stmt->bindParam( 1 , $fname, PDO::PARAM_STR);
        $stmt->bindParam( 2 , $sname, PDO::PARAM_STR);
        $stmt->bindParam( 3 , $email, PDO::PARAM_STR);
        $stmt->bindParam( 4 , $subject, PDO::PARAM_STR);
        $stmt->bindParam( 5 , $message, PDO::PARAM_STR);
        // echo var_dump($stmt);
        $stmt->execute();
        // var_dump($_POST);
        // header("Location: ../index.php");
    } catch (PDOException $e) {
        echo "This is an Execption Test";
        // echo var_dump('Hello');
}


    // function input_cleaner($input) {
    //     $input = trim($input);
    //     $input = stripslashes($input);
    //     $input = htmlspecialchars($input);
    //     return $input;
    // }
