<?php

    $link = mysqli_connect("localhost", "root", "", "formDB");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `contact_info`";
    $query1 = mysqli_query($link, $sql);
    if($query1){
        while($row1 = mysqli_fetch_array($query1)){
            echo "Name: " . $row1['name'] . "<br>";
            echo "Email: " . $row1['email'] . "<br>";
            echo "Subject: " . $row1['subject'] . "<br>";
            echo "Message: " . $row1['message'] . "<br>";
            echo "<br>";
        }
    }
    else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>