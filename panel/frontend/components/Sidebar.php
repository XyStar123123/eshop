<aside class="sidebar">
            <div class="profile-section">
                <img src="/eshop/panel/frontend/assets/images/uploads/users/john_doe.png" alt="Profile Picture" class="logo-img">
                <div class="user-info-section">
                    <span class="username">John Doe</span>
                    <span class="role">Developer</span>
                </div>
            </div>
            <div class="links-section">
                <div class="search-container">
                    <input type="text" class="search-input <?php  if ($_SERVER['REQUEST_URI'] === 'eshop/panel/users_table') echo 'active'; ?>" placeholder="Search links...." id="searchInput">
                    <i class="bi bi-search search-icon"></i>
                </div>
                <ul class="sidebar-item-container">
                    <li class="sidebar-item">
                        <a href="/eshop/panel/home/users_table" class="sidebar-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/users_table') echo 'active'; ?>">
                            <i class="bi bi-person"></i>
                            <span class="sidebar-span">Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/eshop/panel/home/products_table" class="sidebar-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/products_table') echo 'active'; ?>">
                            <i class="bi bi-box-seam"></i>
                            <span class="sidebar-span">Products</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/eshop/panel/home/categories_table" class="sidebar-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/categories_table') echo 'active'; ?>">
                            <i class="bi bi-grid"></i>
                            <span class="sidebar-span">Categories</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/eshop/panel/home/orders_table" class="sidebar-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/orders_table') echo 'active'; ?>">
                            <i class="bi bi-clipboard"></i>
                            <span class="sidebar-span">Orders</span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="logout-theme-section">
                <li class="theme-item">
                    <div class="theme-dropdown-container">
                        <input type="text" class="theme-dropdown" id="themeDropdownBtn" placeholder="Theme" readonly>
                        <ul class="theme-dropdown-menu">
                            <li class="theme-list" onclick="show('Light')">Light</li>
                            <li class="theme-list" onclick="show('Dark')">Dark</li>
                        </ul>
                    </div>
                    <button class="apply-btn" id="applyBtn" onclick="changeTheme()">
                        <i class="bi bi-rulers"></i>
                        <span>Apply</span>
                    </button>
                </li>
                <li class="logout-item">
                    <a href="" class="logout-link">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </aside>