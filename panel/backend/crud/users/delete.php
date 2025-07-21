<?php
    require_once __DIR__ . '/../config/db.php';
    function delete($id){
        global $conn;
        $query = "DELETE FROM users WHERE user_id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>