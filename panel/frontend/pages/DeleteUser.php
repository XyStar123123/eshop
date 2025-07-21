<?php
    require_once __DIR__ . '/../../backend/crud/delete.php';

    $id=$_GET['id'];
    if(delete($id) > 0){
        header("Location:/eshop/panel/home/users_table");
        exit();
    }else{
        echo "<script>alert('Something went wrong')</script>";
        header("Location:/eshop/panel/home/users_table");
        exit();
    }
?>
