<?php 
    require_once __DIR__ . '/../../backend/config/paths.php';
    require_once __DIR__ . '/../../backend/crud/products/select.php';
    $products = select("SELECT * FROM products");
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
                    <h2 class="data-table-title">Products Management</h2>
                    <div class="data-table-actions">
                        <button class="btn btn-primary" onclick="window.location.href = '/eshop/panel/home/products_table/add_product'">
                            <i class="bi bi-plus-circle"></i>
                            <span>Add New Product</span>
                        </button>
                        <form class="data-table-search" method="POST">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Search product..." id="searchData" name="data">
                            <button class="search-btn" name="search"></button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="itemList">
                            <?php $i = 1; ?>
                            <?php foreach($products as $p): ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo htmlspecialchars($p['name']); ?></td>
                                <td><?php echo htmlspecialchars($p['description']); ?></td>
                                <td><?php echo htmlspecialchars($p['price']); ?></td>
                                <td><?php echo htmlspecialchars($p['stock_quantity']); ?></td>
                                <td>
                                    <?php if(!empty($p['image_path'])): ?>
                                        <img src="/eshop/panel/public/uploads/images/products/<?php echo htmlspecialchars($p['image_path']); ?>" 
                                             alt="User Avatar" 
                                             style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                                    <?php else: ?>
                                        <div class="avatar-placeholder">No Image</div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php
                                        if($p['is_active'] == 1):
                                    ?>
                                        <span class="status status-active">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span class="status-text">Yes</span>
                                        </span>
                                    <?php
                                        elseif($p['is_active'] == 0):
                                    ?>
                                        <span class="status status-inactive">
                                            <i class="bi bi-x-circle-fill"></i>
                                            <span class="status-text">No</span>
                                        </span>
                                    <?php
                                        endif;
                                    ?>
                                </td>
                                <td class="created-date">
                                    <i class="bi bi-calendar-plus"></i>
                                    <span><?php echo date('M j, Y', strtotime($p['created_at'])); ?></span>
                                </td>
                                <td class="updated-date">
                                    <i class="bi bi-calendar-check"></i>
                                    <span><?php echo date('M j, Y', strtotime($p['updated_at'])); ?></span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-edit" onclick="window.location.href = '/eshop/panel/home/users_table/edit_user?id=<?php echo $p['product_id']; ?>'">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete" onclick="if(confirm('Are you sure you want to delete this user?')) { window.location.href = '/eshop/panel/home/products_table/delete_product?id=<?php echo $p['product_id']; ?>'; }">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="data-table-footer">
                    <div class="pagination-info">
                        <?php if(!$products){ echo 'No data fetched or table empty'; } else{ echo "Showing <span class='highlight'>1</span> to <span class='highlight'>5</span> of <span class='highlight'>5</span> entries"; } ?>
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