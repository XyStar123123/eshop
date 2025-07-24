<?php
    require_once __DIR__ . '/../../backend/crud/products/delete.php';

    $id=$_GET['id'];
    if(delete($id) > 0){
        header("Location:/eshop/panel/home/products_table");
        exit();
    }else{
        echo "<script>alert('Something went wrong')</script>";
        header("Location:/eshop/panel/home/products_table");
        exit();
    }
?>
