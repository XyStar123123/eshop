<?php
    $conn = mysqli_connect('localhost', 'root', '', 'eshop');
    if(mysqli_connect_errno()){
        die("Connection failed: ". mysqli_connect_error());
    }
    
?>
