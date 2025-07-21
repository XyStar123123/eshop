<?php require_once __DIR__ . '/../../backend/config/paths.php' ?>
<?php
$users = [
    [
        'id' => 1,
        'username' => 'johndoe',
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'role' => 'Administrator',
        'status' => 'active',
        'last_login' => '2023-06-15 14:30:22',
        'avatar' => 'https://i.pravatar.cc/40?img=1'
    ],
    [
        'id' => 2,
        'username' => 'janesmith',
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'role' => 'Editor',
        'status' => 'active',
        'last_login' => '2023-06-16 09:15:45',
        'avatar' => 'https://i.pravatar.cc/40?img=2'
    ],
    [
        'id' => 3,
        'username' => 'robertj',
        'name' => 'Robert Johnson',
        'email' => 'robert.j@example.com',
        'role' => 'Author',
        'status' => 'p
        ng',
        'last_login' => '2023-06-10 16:22:10',
        'avatar' => 'https://i.pravatar.cc/40?img=3'
    ],
    [
        'id' => 4,
        'username' => 'emilyw',
        'name' => 'Emily Wilson',
        'email' => 'emily.w@example.com',
        'role' => 'Subscriber',
        'status' => 'inactive',
        'last_login' => '2023-05-28 11:45:33',
        'avatar' => 'https://i.pravatar.cc/40?img=4'
    ],
    [
        'id' => 5,
        'username' => 'michaelb',
        'name' => 'Michael Brown',
        'email' => 'michael.b@example.com',
        'role' => 'Editor',
        'status' => 'active',
        'last_login' => '2023-06-17 08:12:56',
        'avatar' => 'https://i.pravatar.cc/40?img=5'
    ]
];
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
                        <div class="data-table-search">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Search users...">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <img src="<?php echo htmlspecialchars($user['avatar']); ?>" 
                                             alt="<?php echo htmlspecialchars($user['name']); ?>" 
                                             class="user-avatar">
                                        <div class="user-info">
                                            <div class="user-name"><?php echo htmlspecialchars($user['name']); ?></div>
                                            <div class="user-username">@<?php echo htmlspecialchars($user['username']); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="user-email"><?php echo htmlspecialchars($user['email']); ?></td>
                                <td>
                                    <span class="role-badge">
                                        <?php echo htmlspecialchars($user['role']); ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="status status-<?php echo htmlspecialchars($user['status']); ?>">
                                        <?php 
                                            $statusIcon = 'bi-hourglass-split';
                                            if ($user['status'] === 'active') {
                                                $statusIcon = 'bi-check-circle-fill';
                                            } elseif ($user['status'] === 'inactive') {
                                                $statusIcon = 'bi-x-circle-fill';
                                            }
                                        ?>
                                        <i class="bi <?php echo $statusIcon; ?> status-icon"></i>
                                        <span class="status-text"><?php echo ucfirst(htmlspecialchars($user['status'])); ?></span>
                                    </span>
                                </td>
                                <td class="last-login">
                                    <i class="bi bi-eye"></i>
                                    <span><?php echo date('M j, Y', strtotime($user['last_login'])); ?></span>
                                </td>
                                <td class="actions-cell">
                                    <div class="action-buttons">
                                        <button type="button" class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn-action btn-delete" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <button type="button" class="btn-action btn-view" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="data-table-footer">
                    <div class="pagination-info">
                        Showing <span class="highlight">1</span> to <span class="highlight">5</span> of <span class="highlight">5</span> entries
                    </div>
                    <div class="pagination">
                        <button class="pagination-btn" disabled>
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="pagination-btn active">1</button>
                        <button class="pagination-btn">2</button>
                        <button class="pagination-btn">3</button>
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

<!-- Initialize tooltips -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>