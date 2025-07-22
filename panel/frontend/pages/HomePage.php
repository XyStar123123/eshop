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
            <div class="content-section">
                <div class="stats-card-section">
                    <h2 class="stats-header">Stats Cards Overview</h2>
                    <div class="stats-card-container">
                        <div class="stats-card">
                            <div class="text-context">
                                <h3 class="header-and-icon">
                                    <span>Total Revenue</span>
                                    <i class="bi bi-cash stats-text-icon"></i>
                                </h3>
                                <h2 class="text-success">+ $124,000</h2>
                                <span class="text-success-tint">+10% from yesterday</span>
                            </div>
                        </div>
                        <div class="stats-card">
                            <div class="text-context">
                                <h3 class="header-and-icon">
                                    <span>Total Order</span>
                                    <i class="bi bi-cart stats-text-icon"></i>
                                </h3>
                                <h2 class="text-success">+ 1529 Orders</h2>
                                <span class="text-success-tint">+50% from yesterday</span>
                            </div>
                        </div>
                        <div class="stats-card">
                            <div class="text-context">
                                <h3 class="header-and-icon">
                                    <span>Total Users</span>
                                    <i class="bi bi-people stats-text-icon"></i>
                                </h3>
                                <h2 class="text-secondary">124M Users</h2>
                                <span class="text-secondary-tint">No track for this stats</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart-overview">
                    <h2 class="stats-header">Stats Charts Overview</h2>
                    <ul class="chart-container">
                        <li class="chart-item">
                            <h4 class="chart-header">Order Chart</h4>
                            <div class="line-chart" id="lineChart">
                                <canvas id="orderAnalytics" width="400" height="200"></canvas>
                            </div>
                        </li>

                        <li class="chart-item">
                            <h4 class="chart-header">Revenue Chart</h4>
                            <div class="line-chart" id="lineChart2">
                                <canvas id="orderAnalytics2" width="400" height="200"></canvas>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="recent-order">
                    <div class="table-container">
                        <h2 class="stats-header">Recent Orders</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-header">
                                        <th class="text-center">Order ID</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th class="text-end">Total</th>
                                        <th class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">#12345</td>
                                        <td>John Doe</td>
                                        <td>
                                            <span class="badge bg-success text-white px-3 py-1">Completed</span>
                                        </td>
                                        <td class="text-end">$124.99</td>
                                        <td class="text-center">2025-07-15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">#12346</td>
                                        <td>Jane Smith</td>
                                        <td>
                                            <span class="badge bg-warning text-dark px-3 py-1">Processing</span>
                                        </td>
                                        <td class="text-end">$89.99</td>
                                        <td class="text-center">2025-07-14</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">#12347</td>
                                        <td>Bob Johnson</td>
                                        <td>
                                            <span class="badge bg-info text-white px-3 py-1">Shipped</span>
                                        </td>
                                        <td class="text-end">$199.99</td>
                                        <td class="text-center">2025-07-13</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">#12348</td>
                                        <td>Alice Brown</td>
                                        <td>
                                            <span class="badge bg-danger text-white px-3 py-1">Cancelled</span>
                                        </td>
                                        <td class="text-end">$49.99</td>
                                        <td class="text-center">2025-07-12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once __DIR__ . '/../../frontend/components/Footer.php' ?>
    </div>
</div>

<script src="/eshop/panel/frontend/assets/js/chartAnalytics.js"></script>