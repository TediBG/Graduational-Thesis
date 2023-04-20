<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VideoFlex - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

    <div class="brand">VideoFlex</div>
    <div class="address-bar">The Change Starts With You</div>
    <?php

    if (isset($_GET["logout"])) {

        if ($_GET["logout"] == "true") { ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
            </div>

    <?php
        }
    }
    ?>
    <!-- Navigation -->
    <?php require_once 'navigation.php'; ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/man-doing-color-correction.jpg" alt="Man doing color correction">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/editing-gadgets.jpg" alt="Editing gadgets">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/mobile-video-editing.jpg" alt="Mobile video editing">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">VideoFlex</span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By <strong>Teodor Popov</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Learn more about <strong>video editing</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/laptop-on-a-desk.jpg" alt="Laptop on a desk">
                    <hr class="visible-xs">
                    <p>When it pertains to producing a film or any type of video undertaking, a significant part of the enchantment seen on screen is the product of exceptional editing. The capabilities of a video editor are amazing, given that they initiate with a colossal assortment of materials and then expertly slice and pare them together to produce a comprehensive tale in video structure. In essence, video editing is where the magic manifests, and there is a wealth of knowledge to be gained from exploring related blogs.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; VideoFlex 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        // Activates the Carousel
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

</body>

</html>