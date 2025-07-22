<?php
    require_once __DIR__ . '/../../backend/config/paths.php';
    $result = $pageTitle;
    $basePath = '/eshop/panel';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result ?> | E-Shop Panel</title>
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/themes.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/HomePage.css">
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/AboutPage.css">
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/ContactPage.css">
    <link rel="stylesheet" href="<?php echo $basePath ?>/frontend/assets/css/SignForm.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body data-theme>
    <?php echo $content ?>
<script src="<?php echo $basePath ?>/frontend/assets/js/themeManager.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/searchTableLinks.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/breadCrumb.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/chartAnalytics.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/showingPassword.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/fileUpload.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/fileUpload.js"></script>
<script src="<?php echo $basePath ?>/frontend/assets/js/formAdmin.js" type=""></script>
</body>
</html>