<?php
    function insert($data){
        global $conn;
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $full_name = htmlspecialchars($data['full_name']);
        $username = htmlspecialchars($data['username']);
        $is_admin = htmlspecialchars($data['is_admin']);
        $avatar = upload();
        
        // Specify column names in the INSERT query to match the actual table structure
        $query = "INSERT INTO users (email, password_hash, full_name, username, avatar_path, is_admin) VALUES 
        ('$email', '$password', '$full_name', '$username', '$avatar', '$is_admin')";
        
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            error_log("MySQL Error: " . mysqli_error($conn));
        }
        return mysqli_affected_rows($conn);
    }

    function upload(){
        if (!isset($_FILES['avatar']) || $_FILES['avatar']['error'] !== UPLOAD_ERR_OK) {
            return null;
        }

        if (!file_exists('/../../public/uploads/images/users/')) {
            mkdir('/../../public/uploads/images/users/', 0777, true);
        }
        $file_name = $_FILES['avatar']['name'];
        $tmp_name = $_FILES['avatar']['tmp_name'];

        $ext = strtolower(end(explode('.', $file_name)));
        
        $new_file_name = uniqid() . '.' . $ext;
        
        move_uploaded_file($tmp_name, __DIR__ . '/../../../public/uploads/images/users/' . $new_file_name);

        return  $new_file_name;
    }
?>