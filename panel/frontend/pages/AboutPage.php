<?php require_once __DIR__ . '/../../backend/config/paths.php' ?>
<?php require_once __DIR__ . '/../../public/config/db.php' ?>
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
            <div class="about-container">
                <div class="about-header">
                    <h1>E-Shop Admin Panel</h1>
                    <div class="version-info">
                        Version 1.0.0 | Released: July 16, 2025
                    </div>
                </div>

                <!-- App Information Section -->
                <section class="section">
                    <h2>About This Application</h2>
                    <p>The E-Shop Admin Panel is a comprehensive management system designed to help you efficiently manage your online store. With an intuitive interface and powerful features, you can easily handle products, categories, orders, and customer data all in one place.</p>
                </section>

                <!-- Changelog Section -->
                <section class="section">
                    <h2>Changelog</h2>
                    
                    <div class="changelog-entry">
                        <div>
                            <span class="changelog-version">v1.0.0</span>
                            <span class="changelog-date">2025-07-16</span>
                        </div>
                        <ul class="changelog-changes">
                            <li>Initial release of E-Shop Admin Panel</li>
                            <li>Added product management functionality</li>
                            <li>Implemented category management</li>
                            <li>Added order processing system</li>
                            <li>Included user management and authentication</li>
                        </ul>
                    </div>
                </section>

                <!-- Technologies Used Section -->
                <section class="section">
                    <h2>Technologies Used</h2>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <i class="bi bi-filetype-php"></i>
                            <h3>PHP</h3>
                            <p>Backend processing</p>
                        </div>
                        <div class="tech-item">
                            <i class="bi bi-database"></i>
                            <h3>MySQL</h3>
                            <p>Database management</p>
                        </div>
                        <div class="tech-item">
                            <i class="bi bi-filetype-js"></i>
                            <h3>JavaScript</h3>
                            <p>Client-side interactivity</p>
                        </div>
                        <div class="tech-item">
                            <i class="bi bi-filetype-css"></i>
                            <h3>CSS3</h3>
                            <p>Styling and layout</p>
                        </div>
                        <div class="tech-item">
                            <i class="bi bi-filetype-html"></i>
                            <h3>HTML5</h3>
                            <p>Markup structure</p>
                        </div>
                    </div>
                </section>

                <!-- Server Environment Section (Visible to admins only) -->
                <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                <section class="section">
                    <h2>Server Environment</h2>
                    <div class="env-details">
                        <strong>PHP Version:</strong> <?php echo phpversion(); ?>
                        <strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?>
                        <strong>Database:</strong> MySQL <?php 
                            echo $conn->server_version;
                            $conn->close();
                        ?>
                        <strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?>
                        <strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?>
                    </div>
                </section>
                <?php endif; ?>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>

<!-- Include the about page specific CSS -->
<link rel="stylesheet" href="/eshop/panel/frontend/assets/css/about.css">