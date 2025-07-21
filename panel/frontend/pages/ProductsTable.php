<?php require_once __DIR__ . '/../../backend/config/paths.php' ?>
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
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>