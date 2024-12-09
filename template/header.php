<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farose</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="Farose">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/img/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#FFFFFF">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-default.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/misc.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/membership.css?v=<?php echo time(); ?>">

    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">

        <header id="header">
            <div class="header-nav">

                <!-- Logo -->
                <div class="header-logo">
                    <a href="<?php echo $root; ?>index.php" class="logo">
                        <img src="<?php echo $root; ?>assets/img/header-logo.svg" alt="Farose Header Logo" draggable="false">
                    </a>
                </div>

                <!-- Menu -->
                <div class="header-menu">
                    <div class="panel-overlay hidden-device-sm"></div>
                    <div class="panel">
                        <div class="wrapper">
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">
                                    <div class="panel-body">
                                        <ul class="menu">
                                            <li>
                                                <a class="menu-link" href="<?php echo $root ?>dara.php">
                                                    ดาราช่อง
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-link dropdown-menu-trigger" href="javascript:;" data-dropdown-menu="shows">
                                                    รายการ
                                                </a>
                                                <div id="shows" class="dropdown-menu">
                                                    <div class="panel-scroll" data-lenis-prevent>
                                                        <div class="panel-container">
                                                            <ul>
                                                                <li><a href="javascript:;" class="submenu-close hidden-device-md"> <i class="ic ic-caret-left"></i> รายการ</a></li>
                                                                <li><a href="<?php echo $root ?>program.php">Farose</a></li>
                                                                <li><a href="<?php echo $root ?>program.php">Farose Podcast</a></li>
                                                                <li><a href="<?php echo $root ?>program.php">Jito</a></li>
                                                                <li><a href="<?php echo $root ?>program.php">FaroseTALK</a></li>
                                                                <li><a href="<?php echo $root ?>program.php">Lecture Lek</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="menu-link" href="#outer-shopify">
                                                    ซื้อสินค้า
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-link" href="#outer-shopify">
                                                    ชาวช่องแบบมีใบ
                                                </a>
                                            </li>
                                            <li>
                                                <a class="menu-link" href="<?php echo $root ?>membership.php">
                                                    สิทธิพิเศษชาวช่อง
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="panel-footer hidden-device-md">
                                        <ul class="social-menu">
                                            <li><a href="#outer">
                                                    <i class="ic ic-youtube size-icon-20"></i></a></li>
                                            <li><a href="#outer">
                                                    <i class="ic ic-instagram size-icon-20"></i></a></li>
                                            </a></li>
                                            <li><a href="#outer">
                                                    <i class="ic ic-facebook size-icon-20"></i></a></li>
                                            </a></li>
                                            <li><a href="#outer">
                                                    <i class="ic ic-tiktok size-icon-20"></i></a></li>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Ctrl -->
                <div class="header-menu-ctrl hidden-device-md">
                    <a class="ctrl" href="javascript:;">
                        <span class="hamburger"><span class="bars">&nbsp;</span></span>
                    </a>
                </div>

                <!-- Menu Ctrl -->
                <div class="header-user">
                    <a class="ctrl" href="#outer-shopify">
                        <i class="ic ic-person size-icon-16"></i>
                    </a>
                </div>
            </div>
        </header>