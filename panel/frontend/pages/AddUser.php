<?php 
    require_once __DIR__ . '/../../backend/config/paths.php';
    require_once __DIR__ . '/../../backend/config/db.php';
?>
<?php
    require_once __DIR__ . '/../../backend/crud/users/insert.php';
    if(isset($_POST['submit'])){
        if(insert($_POST) > 0){
            header("Location:/eshop/panel/home/users_table");
        }else{
            echo "
                <script>
                    alert('Something when wrong');
                </script>
            ";
            header("Location:/eshop/panel/home/users_table");
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
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input">
                                <input type="password" name="password" id="password">
                                <button type="button" class="toggle-password" id="showPassword" aria-label="Toggle password visibility">
                                    <i class="bi bi-eye" id="visibleEyeIcon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="">Avatar</label>
                                <div class="file-upload">
                                    <label for="fileInput" class="upload-label">Upload</label>
                                    <input type="text" id="fileName" readonly>
                                    <input type="file" name="avatar" id="fileInput" class="file-input" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Admin</label>
                            <select name="is_admin" id="">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '/eshop/panel/home/users_table'">
                            <i class="bi bi-arrow-left"></i> Back
                        </button>
                        <div class="action-buttons">
                            <button type="reset" class="btn btn-outline">
                                <i class="bi bi-x-circle"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary" name="submit">
                                <i class="bi bi-plus-circle"></i> Add User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>