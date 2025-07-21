<?php
    $requestUri = $_SERVER['REQUEST_URI'];
    $basePath = '/eshop/panel';
    $requestUri = str_replace($basePath, '', $requestUri);
    
    $requestUri = strtok($requestUri, '?');
    $requestUri = rtrim($requestUri, '/');
    
    require_once __DIR__ . '/../../backend/lib/helpers/PageTitleHelper.php';

    ob_start();

    switch($requestUri){
        case '':
        case '/':
        case '/home':
        case '/index.php':
            require __DIR__ . '/../../frontend/pages/HomePage.php';
            $pageTitle = getPageTitle('HomePage');
            break;
        case '/home/about':
            require __DIR__ . '/../../frontend/pages/AboutPage.php';
            $pageTitle = getPageTitle('AboutPage');
            break;
        case '/home/contact':
            require __DIR__ . '/../../frontend/pages/ContactPage.php';
            $pageTitle = getPageTitle('ContactPage');
            break;
        case '/home/profile':
            require __DIR__ . '/../../frontend/pages/ProfilePage.php';
            $pageTitle = getPageTitle('ProfilePage');
            break;
        case '/home/orders_table':
            require __DIR__ . '/../../frontend/pages/OrdersTable.php';
            $pageTitle = getPageTitle('OrdersTable');
            break;
        case '/home/users_table':
            require __DIR__ . '/../../frontend/pages/UsersTable.php';
            $pageTitle = getPageTitle('UsersTable');
            break;
        case '/home/products_table':
            require __DIR__ . '/../../frontend/pages/ProductsTable.php';
            $pageTitle = getPageTitle('ProductsTable');
            break;
        case '/home/categories_table':
            require __DIR__ . '/../../frontend/pages/CategoriesTable.php';
            $pageTitle = getPageTitle('CategoriesTable');
            break;
        case '/home/users_table/add_user':
            require __DIR__ . '/../../frontend/pages/AddUser.php';
            $pageTitle = getPageTitle('AddUser');
            break;
        case '/home/users_table/edit_user':
            require __DIR__ . '/../../frontend/pages/EditUser.php';
            $pageTitle = getPageTitle('EditUser');
            break;
        case '/home/users_table/delete_user':
            require __DIR__ . '/../../frontend/pages/DeleteUser.php';
            $pageTitle = getPageTitle('DeleteUser');
            break;
        case '/login':
            require __DIR__ . '/../../frontend/pages/LoginForm.php';
            $pageTitle = getPageTitle('LoginForm');
            break;
        default:
            require __DIR__ . '/../../frontend/pages/NotFoundPage.php';
            $pageTitle = getPageTitle('NotFoundPage');
            break;
    }

    $content = ob_get_clean();

    require __DIR__ . '/../../frontend/layouts/MainLayout.php';
?>