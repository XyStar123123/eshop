<?php
    require_once __DIR__ . '/../../config/db.php';
    function delete($id){
        global $conn;
        $query = "DELETE FROM products WHERE product_id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>