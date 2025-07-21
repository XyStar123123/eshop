<?php 
    require_once __DIR__ . '/../../backend/config/paths.php';
    require_once __DIR__ . '/../../backend/config/db.php';
    require_once __DIR__ . '/../../backend/crud/users/select.php';

    $user_id = $_GET['id'];
    $users = select("SELECT * FROM users WHERE user_id = '$user_id'");
?>
<?php
    require_once __DIR__ . '/../../backend/crud/users/update.php';
    if(isset($_POST['submit'])){
        if(update($_POST) > 0){
            header("Location:/eshop/panel/home/users_table");
        }else{
            echo "
                <script>
                    alert('Something when wrong');
                </script>
            ";
            header("Location:/eshop/panel/");
        }
    }    
?>
<div class="layout">
    <div class="left-side">
        <?php require_once __DIR__ . '/../../frontend/components/Sidebar.php' ?>
    </div>
    <div class="right-side">
        <header class="header">
            <?php require_once __DIR__ . '/../../frontend/components/Navbar.php' ?>
        </header>
        <main class="content">
            <div class="breadcrumb-container"></div>
            
            <div class="form-container">
                <div class="form-header">
                    <h2>Add New User</h2>
                    <p>Fill in the user information below</p>
                </div>
                
                <form method="POST" class="user-form" enctype="multipart/form-data">
                    <div class="form-row">
                        <?php
                            foreach($users as $u):
                        ?>
                        <input type="hidden" name="user_id" value="<?php echo $u['user_id'] ?>">
                        <input type="hidden" name="avatar" value="<?php echo $u['avatar_path'] ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $u['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input">
                                <input type="password" name="password" id="password" value="<?php echo $u['password_hash'] ?>">
                                <button type="button" class="toggle-password" id="showPassword" aria-label="Toggle password visibility">
                                    <i class="bi bi-eye" id="visibleEyeIcon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name" value="<?php echo $u['full_name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="<?php echo $u['username'] ?>" required>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="">Avatar</label>
                                <div class="file-upload">
                                    <label for="fileInput" class="upload-label">Upload</label>
                                    <input type="text" id="fileName" readonly value="<?php echo $u['avatar_path'] ?>">
                                    <input type="file" name="avatar" value="<?php echo $u['avatar_path'] ?>" id="fileInput" class="file-input">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Admin</label>
                            <select name="is_admin" id="">
                                <option value="" disabled>Choose</option>
                                <option value="1" <?php if($u['is_admin'] == 1){ echo 'selected'; } ?>>Yes</option>
                                <option value="0" <?php if($u['is_admin'] == 0){ echo 'selected'; } ?>>No</option>
                            </select>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?> 
                    
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '/eshop/panel/home/users_table'">
                            <i class="bi bi-arrow-left"></i> Back
                        </button>
                        <div class="action-buttons">
                            <button type="reset" class="btn btn-outline">
                                <i class="bi bi-x-circle"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary" name="submit">
                                <i class="bi bi-pencil-square"></i> Edit User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>