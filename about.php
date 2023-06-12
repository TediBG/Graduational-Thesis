<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VideoFlex - About</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

    <div class="brand">VideoFlex</div>
    <div class="address-bar">The Change Starts With You</div>
    <!-- Navigation -->
    <?php require_once 'navigation.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About <strong>VideoFlex</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <style>
                        .embed-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                            max-width: 100%;
                        }

                        .embed-container iframe,
                        .embed-container object,
                        .embed-container embed {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed//MQBfEFK5vg0' frameborder='0' allowfullscreen></iframe></div>
                </div>
                <div class="col-md-6">
                    <p>Video editing is the process of manipulating and rearranging video footage to create a
                        final product that tells a story or conveys a message. It involves assembling, trimming,
                        and rearranging video clips, adding transitions, effects, and audio elements to create a cohesive and visually
                        appealing video. Video editing can be done using specialized software such as Adobe Premiere Pro, Final Cut Pro,
                        or DaVinci Resolve, and it requires technical skills, creativity, and a keen eye for detail. Video editing is used
                        in various industries, including film, television, advertising, social media, and online content creation. It plays
                        a crucial role in shaping the overall aesthetic, mood, and impact of a video, making it an essential part of modern
                        media production.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">The <strong>Creator</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="" alt="">
                    <h3></h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/teodor's photo.png" alt="Photo of Teodor Popov">
                    <h3>Teodor Popov
                        <small>Developer</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="" alt="">
                    <h3></h3>
                </div>
                <div class="clearfix"></div>
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

</body>

</html>