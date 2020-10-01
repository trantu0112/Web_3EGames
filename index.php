<!doctype html>
<html class="no-js" lang="en">
<?php include_once "layout/head.php"; ?>
	<body>
        <div class="wrapper">
            <noscript>
                <div class="global-site-notice noscript">
                    <div class="notice-inner">
                        <p><strong>JavaScript seems to be disabled in your browser.</strong>
                            <br/> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
                    </div>
                </div>
            </noscript>
            <div class="page one-column">
                <?php include_once "layout/header.php"; ?>
                            <?php
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }else {
                                $page = 'home';
                            }

                            switch ($page) {
                                case 'error':
                                    include_once 'view/plugins/error.php';
                                    break;
                                case 'blog':
                                    include_once 'view/blog/blog.php';
                                    break;
                                case 'blog-detail':
                                    include_once 'view/blog/blog-detail.php';
                                    break;
                                case 'cart':
                                    include_once 'view/cart/cart.php';
                                    break;
                                case 'checkout':
                                    include_once 'view/cart/checkout.php';
                                    break;
                                case 'contact':
                                    include_once 'view/plugins/contact.php';
                                    break;
                                case 'login':
                                    include_once 'view/account/login.php';
                                    break;  
                                case 'product-grid':
                                    include_once 'view/product/product-grid.php';
                                    break;
                                case 'product-list':
                                    include_once 'view/product/product-list.php';
                                    break;
                                case 'product-detail':
                                    include_once 'view/product/product-detail.php';
                                    break;
                                case 'register':
                                    include_once 'view/account/register.php';
                                    break;
                                case 'typography':
                                    include_once 'view/plugins/typography.php';
                                    break;
                                default:
                                    include_once 'layout/slides.php';
                                    ?>
                                    <div class="em-wrapper-main">
                                        <div class="container container-main">
                                            <div class="em-inner-main">
                                            <?php
                                            include_once 'layout/banner.php';
                                            include_once 'view/home.php';
                                            include_once 'layout/news.php';
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                            <?php
                                    include_once "layout/newsletter.php";
                                    break;
                                                }
                                            ?>
                <?php include_once "layout/footer.php"; ?>
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </body>
</html>