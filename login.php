<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name === "admin" && $password === "admin"){
        header ("location: admin.php");
    }

    // closing the connection with the database
    mysqli_close($link);
?>