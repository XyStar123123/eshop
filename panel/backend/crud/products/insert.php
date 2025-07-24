<?php
    function insert($data){
        global $conn;
        $name = htmlspecialchars($data['name']);
        $description = htmlspecialchars($data['description']);
        $price = htmlspecialchars($data['price']);
        $stock = htmlspecialchars($data['stock']);
        $image = upload();
        $is_active = htmlspecialchars($data['is_active']);
        
        // Specify column names in the INSERT query to match the actual table structure
        $query = "INSERT INTO products (name, description, price, stock_quantity, image_path, is_active) VALUES 
        ('$name', '$description', '$price', '$stock', '$image', '$is_active')";
        
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            error_log("MySQL Error: " . mysqli_error($conn));
        }
        return mysqli_affected_rows($conn);
    }

    function upload(){
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            return null;
        }

        if (!file_exists('/../../public/uploads/images/products/')) {
            mkdir('/../../public/uploads/images/products/', 0777, true);
        }
        $file_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $ext = strtolower(end(explode('.', $file_name)));
        
        $new_file_name = uniqid() . '.' . $ext;
        
        move_uploaded_file($tmp_name, __DIR__ . '/../../../public/uploads/images/products/' . $new_file_name);

        return  $new_file_name;
    }
?>