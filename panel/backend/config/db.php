<?php
    $conn = mysqli_connect('localhost', 'root', '', 'eshop');

    if (!$conn) {
        die("Database connection failed: " . $conn);
    }
    
?>
