<!doctype html>
<html class="no-js" lang="en">
<?php include_once "layout/head.php"; ?>
	<body class="cms-index-index">
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
                                    include_once 'view/error.php';
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
                                    break;
                            }
                            ?>
                <?php include_once "layout/footer.php"; ?>
                <?php include_once "layout/newsletter.php"; ?>
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
        <?php include_once "layout/js.php"; ?>
    </body>
</html>