<?php
    $conn = mysqli_connect('localhost', 'root', '', 'eshop');
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>