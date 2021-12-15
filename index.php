    <?php
    include './config.php';
    function loadClass($c)
    {
        include "./class/$c.php";
    }
    if (!isset($_SESSION)) {@ob_start();session_start();}
    spl_autoload_register('loadClass');

    $controller = utilities::get('controller', 'home');
    $obj = new nhaccu();
    $dataDS = $obj->getDanhSach();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | NhacCuBin</title>
        <link href="resource/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/css/font-awesome.min.css" rel="stylesheet">
        <link href="resource/css/prettyPhoto.css" rel="stylesheet">
        <link href="resource/css/price-range.css" rel="stylesheet">
        <link href="resource/css/animate.css" rel="stylesheet">
        <link href="resource/css/main.css" rel="stylesheet">
        <link href="resource/css/add.css" rel="stylesheet">
        <link href="resource/css/them.css" rel="stylesheet">
        <link href="resource/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <!--/head-->

    <body>
        <?php
        if ($controller == 'home') {
            include './controllers/ctrler_home.php';
        }
        if ($controller == 'product') {
            include './controllers/ctrler_shop.php';
        }
        if ($controller == 'login') {
            include './controllers/ctrler_login.php';
        }
        if ($controller == 'cart') {
            include './controllers/ctrler_cart.php';
        }
        ?>
        <script src="resource/js/jquery.js"></script>
        <script src="resource/js/bootstrap.min.js"></script>
        <script src="resource/js/jquery.scrollUp.min.js"></script>
        <script src="resource/js/price-range.js"></script>
        <script src="resource/js/jquery.prettyPhoto.js"></script>
        <script src="resource/js/main.js"></script>
    </body>

    </html>
