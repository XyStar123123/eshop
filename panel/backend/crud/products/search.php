<?php
    require_once 'select.php';
    function search($data){
        $query = "SELECT * FROM users WHERE email LIKE '%$data%' OR full_name LIKE '%$data%' OR username LIKE '%$data%' OR is_admin LIKE '%$data%' ";
        return select($query);
    }
?>