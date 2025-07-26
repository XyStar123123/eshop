<?php
    require_once __DIR__ . '/../../config/db.php';
    function delete($id){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$id'");
        $user = mysqli_fetch_assoc($result);
        $avatar = $user['avatar_path'];

        $avatarPath = __DIR__ . '/../../../../public/uploads/images/users/' . $avatar;  
        if($avatar && file_exists($avatarPath)){
            unlink($avatarPath);
        }

        $query = "DELETE FROM users WHERE user_id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>