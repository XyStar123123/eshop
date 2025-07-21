<?php
session_start();
require_once __DIR__ . '/../../backend/config/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    // Get avatar path and delete user in one go
    $result = mysqli_query($conn, "SELECT avatar_path FROM users WHERE user_id = $id");
    if ($user = mysqli_fetch_assoc($result)) {
        // Delete avatar file if exists
        if ($user['avatar_path']) {
            $avatar = __DIR__ . '/../../public/uploads/images/users/' . $user['avatar_path'];
            if (file_exists($avatar)) unlink($avatar);
        }
        
        // Delete user
        mysqli_query($conn, "DELETE FROM users WHERE user_id = $id");
        $_SESSION['success'] = mysqli_affected_rows($conn) ? 'User deleted' : 'Delete failed';
    } else {
        $_SESSION['error'] = 'User not found';
    }
} else {
    $_SESSION['error'] = 'Invalid ID';
}

header('Location: /eshop/panel/home/users_table');
?>
