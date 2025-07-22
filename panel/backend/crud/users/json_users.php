<?php
    require_once __DIR__ . '/../../config/db.php';

    function select($data){
        global $conn;
        $result = mysqli_query($conn, $data);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return json_encode($rows);
    }
    
    header("Content-Type:application/json");
    echo select("SELECT * FROM users");
?>