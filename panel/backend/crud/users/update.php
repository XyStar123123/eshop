<?php

function upload(){
    if (!file_exists('/../../public/uploads/images/users/')) {
        mkdir('/../../public/uploads/images/users/', 0777, true);
    }
    $file_name = $_FILES['avatar']['name'];
    $tmp_name = $_FILES['avatar']['tmp_name'];

    $ext = strtolower(end(explode('.', $file_name)));
    
    $new_file_name = uniqid() . '.' . $ext;
    
    move_uploaded_file($tmp_name, __DIR__ . '/../../public/uploads/images/users/' . $new_file_name);

    return  $new_file_name;
}

function update($data){
    global $conn;
    $user_id = $data['user_id'];
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $full_name = htmlspecialchars($data['full_name']);
    $username = htmlspecialchars($data['username']);
    $old_avatar = $data['avatar'];
    $is_admin = $data['is_admin'];

    if($_FILES['avatar']['error'] !== 4){
        $avatar_path = upload();
    }else{
        $avatar_path = $old_avatar;
    }

    if(!$avatar_path){
        return false;
    }
    
    $query = "UPDATE users SET email='$email', password_hash='$password', full_name='$full_name', avatar_path='$avatar_path', updated_at=NOW() WHERE user_id='$user_id'";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
?>