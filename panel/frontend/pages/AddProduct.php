<?php 
    require_once __DIR__ . '/../../backend/config/paths.php';
    require_once __DIR__ . '/../../backend/config/db.php';
?>
<?php
    require_once __DIR__ . '/../../backend/crud/products/insert.php';
    if(isset($_POST['submit'])){
        if(insert($_POST) > 0){
            header("Location:/eshop/panel/home/products_table");
        }else{
            echo "
                <script>
                    alert('Something when wrong');
                </script>
            ";
            header("Location:/eshop/panel/home/products_table");
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
                    <h2>Add New Product</h2>
                    <p>Fill in the user information below</p>
                </div>
                
                <form method="POST" class="user-form" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" required>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <div class="file-upload">
                                    <label for="fileInput" class="upload-label">Upload</label>
                                    <input type="text" id="fileName" readonly>
                                    <input type="file" name="image" id="fileInput" class="file-input" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Active</label>
                            <select name="is_active" id="is_active">
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
<script src="/eshop/panel/frontend/assets/js/showingPassword.js"></script>
<script src="/eshop/panel/frontend/assets/js/fileUpload.js"></script>