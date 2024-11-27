<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="views/views/assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="views/assets/css/rt-plugins.css">
    <link rel="stylesheet" href="views/assets/css/app.css">
    <!-- End : Theme CSS-->
    <script src="views/assets/js/settings.js" sync></script>
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <?php
        if(isset($_SESSION['login-success']) && $_SESSION['login-success'] == "OK"){
            include "views/components/header.php";
            include "views/components/settingsmodal.php"; 
            if (isset($_GET['ruta'])) {
                if ($_GET['ruta'] == "dashboard") {
                    include "views/models/" . $_GET['ruta'] . ".php";
                }
            }
            include "views/components/footer.php";
            include "views/components/footer-flex.php";
        } else {
            include "views/models/login.php";
        }
        ?>
    </main>
    <!-- scripts -->
    <script src="views/assets/js/jquery-3.6.0.min.js"></script>
    <script src="views/assets/js/rt-plugins.js"></script>
    <script src="views/assets/js/app.js"></script>
</body>

</html>