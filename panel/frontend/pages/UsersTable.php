<?php require_once __DIR__ . '/../../backend/config/paths.php' ?>
<?php require_once __DIR__ . '/../../backend/config/db.php' ?>
<?php require_once __DIR__ . '/../../backend/crud/users/select.php' ?>
<?php require_once __DIR__ . '/../../backend/crud/users/search.php' ?>

<?php
    $users = select("SELECT * FROM users");

    if(isset($_POST['search'])){
        $users = search($_POST['data']);
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
            <div class="data-table-container">
                <div class="data-table-header">
                    <h2 class="data-table-title">Users Management</h2>
                    <div class="data-table-actions">
                        <button class="btn btn-primary" onclick="window.location.href = '/eshop/panel/home/users_table/add_user'">
                            <i class="bi bi-plus-circle"></i>
                            <span>Add New User</span>
                        </button>
                        <form class="data-table-search" method="POST">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Search users..." id="searchData" name="data">
                            <button class="search-btn" name="search"></button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Avatar</th>
                                <th>Admin</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="itemTable">
                            
                        </tbody>
                    </table>
                </div>
                <div class="data-table-footer">
                    <div class="pagination-info">
                        <?php if(!$users){ echo 'No data fetched or table empty'; } else{ echo "Showing <span class='highlight'>1</span> to <span class='highlight'>5</span> of <span class='highlight'>5</span> entries"; } ?>
                    </div>
                    <div class="pagination">
                        <button class="pagination-btn" disabled>
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="pagination-btn active">1</button>
                        <button class="pagination-btn">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>

<script src="eshop/panel/frontend/assets/js/tooltip.js"></script>