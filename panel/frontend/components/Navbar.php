<!-- Navbar -->
<nav class="nav">
                <div class="nav-logo">
                    <img src="/eshop/panel/frontend/assets/images/custom/logo.png" alt="" class="nav-img-logo">
                    <span class="nav-logo-span">E-Panel</span>
                </div>
                <ul class="nav-link-container">
                    <li class="nav-link">
                        <a href="/eshop/panel/" class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/' || $_SERVER['REQUEST_URI'] == '/eshop/panel/home') echo 'active'; ?>">
                            <i class="bi bi-house-door"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/eshop/panel/home/about" class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/about') echo 'active'; ?>">
                            <i class="bi bi-info-circle"></i>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/eshop/panel/home/contact" class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/contact') echo 'active'; ?>">
                            <i class="bi bi-telephone"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/eshop/panel/home/profile" class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/eshop/panel/home/profile') echo 'active'; ?>">
                            <i class="bi bi-person"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                </ul>
            </nav>