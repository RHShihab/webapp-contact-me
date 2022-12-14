<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo $name . "\n";
    echo $email . "\n";
    echo $subject . "\n";
    echo $message . "\n";

    // establish connection with the database
    $link = mysqli_connect("localhost", "root", "", "formDB");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // the query
    $sql = "INSERT INTO contact_info (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    // running the query
    if(mysqli_query($link, $sql)){
        echo "Message sent successfully";
    }
    else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    // closing the connection with the database
    mysqli_close($link);
?>