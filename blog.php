<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>VideoFlex - Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/business-casual.css" rel="stylesheet">
    </head>

    <body>

        <div class="brand">VideoFlex</div>
        <div class="address-bar">The Change Starts With You</div>

        <!--Navigation -->
        <?php require_once 'navigation.php'; ?>

        <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <h2 class="text-center">Welcome <?php echo $fname;
                                                        echo " ";
                                                        echo $lname; ?> - <a href="logout.php">Logout</a></h2>

                        <hr>
                        <h2 class="intro-text text-center"><strong>VideoFlex</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/man-doing-color-correction.jpg" alt="Man doing color correction">
                        <h2>Why color correction is needed?
                            <br>
                            <small>February 14, 2023</small>
                        </h2>
                        <p>
                            Color correction in video editing is essential for correcting exposure, achieving color consistency, enhancing colors,
                            correcting white balance and color casts, and expressing creative intent, playing a crucial role in creating
                            a professional and visually appealing video.
                        </p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/editing-gadgets.jpg" alt="Editing gadgets">
                        <h2>Video editing gadgets
                            <br>
                            <small>March 3, 2023</small>
                        </h2>
                        <p>
                            Essential gadgets for video editing include a powerful computer, external storage drives, high-quality monitor,
                            graphics tablet, video editing software, headphones or speakers, lighting equipment, ergonomic keyboard and mouse,
                            color calibration tools, and mobile devices for on-the-go editing and collaboration.
                        </p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/mobile-video-editing.jpg" alt="Mobile video editing">
                        <h2>The benefits of mobile video editing
                            <br>
                            <small>April 1, 2023</small>
                        </h2>
                        <p>Mobile video editing has gained popularity due to advancements in smartphone technology and the availability
                            of powerful video editing apps, offering advantages such as portability, accessibility, user-friendly interfaces,
                            quick editing, creativity on the go, and social media integration, making it a convenient option for content
                            creators and social media enthusiasts to create and share visually appealing videos with ease.
                        </p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <style>
                .colour-correction-blog {
                    text-align: justify;
                }

                .editing-gadg-blog {
                    text-align: justify;
                }

                .mobile-videdit-blog {
                    text-align: justify;
                }
            </style>

        </div>
        <!-- /.container -->

        <!-- Modal 1 -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Why color correction is needed?</h4>
                    </div>
                    <div class="modal-body">
                        <p class="colour-correction-blog">&nbsp; Color correction is an essential step in video editing because it helps to ensure that the colors
                            in a video are accurate, consistent, and visually appealing. Here are some reasons why color
                            correction is needed in video editing: <br>
                            <strong>1. Correcting Exposure:</strong> Cameras may not always capture footage with perfect exposure, resulting
                            in footage that is too dark or too bright. Color correction can adjust the brightness and
                            contrast of the video to correct exposure issues and make the video more visually pleasing. <br>
                            <strong>2. Color Consistency:</strong> Different shots in a video may have different lighting conditions,
                            which can result in color inconsistencies. Color correction helps to create a consistent
                            look and feel throughout the video by matching the colors of different shots to create a
                            cohesive visual narrative. <br>
                            <strong>3. Enhancing Colors:</strong> Color correction can be used to enhance the colors in a video, making
                            them more vibrant or muted depending on the desired aesthetic. This can help create a mood or
                            tone that complements the story or message of the video. <br>
                            <strong>4. Correcting White Balance:</strong> Cameras may capture footage with incorrect white balance,
                            resulting in footage that appears too warm or too cool. Color correction can adjust the
                            white balance to ensure that whites are neutral and other colors are accurate, creating
                            a natural-looking image. <br>
                            <strong>5. Correcting Color Casts:</strong> Sometimes, footage may have unwanted color casts, such as a green
                            or magenta tint. Color correction can correct these color casts and restore the video to its
                            intended color balance. <br>
                            <strong>6. Creative Expression:</strong> Color correction can also be used as a creative tool to convey emotions,
                            create visual motifs, or establish a specific style or look for a video. It allows video editors
                            to manipulate the colors to achieve a specific artistic vision. <br>
                            &nbsp; In summary, color correction is necessary in video editing to correct exposure, achieve color
                            consistency, enhance colors, correct white balance and color casts, and express creative intent.
                            It plays a crucial role in achieving a professional and visually appealing video that effectively
                            conveys the intended message or story.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 2 -->
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Video editing gadgets</h4>
                    </div>
                    <div class="modal-body">
                        <p class="editing-gadg-blog">&nbsp; As a video editor, there are several gadgets that can enhance your workflow and help you create
                            professional-looking videos. Here are some essential gadgets for a video editor: <br>
                            <strong>1. Powerful Computer:</strong> A high-performance computer with a powerful processor, ample RAM,
                            and a dedicated graphics card is essential for video editing. Look for a system that can
                            handle resource-intensive tasks like rendering and exporting videos smoothly. <br>
                            <strong> 2. External Storage Drives:</strong> As a video editor, you'll need plenty of storage space for
                            your video files. Invest in external hard drives or SSDs to store your video footage,
                            project files, and backups. Fast transfer speeds and ample storage capacity are
                            important considerations. <br>
                            <strong>3. High-Quality Monitor:</strong> A high-resolution monitor with accurate color reproduction
                            is crucial for video editing. Look for a monitor with a wide color gamut, high resolution
                            (such as 4K or higher), and good contrast ratio to ensure accurate color grading
                            and video quality. <br>
                            <strong>4. Graphics Tablet:</strong> A graphics tablet, such as a Wacom tablet, can greatly enhance your
                            precision and control when working on video editing software. It allows you to make
                            precise adjustments to video clips, create detailed graphics, and perform
                            other tasks more efficiently. <br>
                            <strong>5. Video Editing Software:</strong> You'll need professional video editing software to edit and
                            process your videos. Popular options include Adobe Premiere Pro, Final Cut Pro, and
                            DaVinci Resolve, among others. Choose a software that suits your editing needs and
                            proficiency level. <br>
                            <strong>6. Headphones or Speakers:</strong> Good quality headphones or speakers are important for
                            accurate audio monitoring while editing videos. Look for options with good frequency
                            response, clarity, and sound isolation to ensure precise audio editing and mixing. <br>
                            <strong>7. Lighting Equipment:</strong> Proper lighting is crucial for video production. Invest in
                            good-quality lighting equipment, such as LED lights or softboxes, to ensure well-lit
                            and properly exposed videos. It's especially important if you're shooting your
                            own footage for editing. <br>
                            <strong>8. Ergonomic Keyboard and Mouse:</strong> Spending long hours editing videos can strain your wrists
                            and fingers. Investing in an ergonomic keyboard and mouse can help reduce discomfort and
                            prevent repetitive strain injuries. Look for options with ergonomic designs and
                            customizable keys for efficient editing. <br>
                            <strong>9. Color Calibration Tools:</strong> Color accuracy is crucial in video editing. Consider investing
                            in color calibration tools, such as a colorimeter or spectrophotometer, to ensure accurate
                            color grading and consistent color reproduction across different devices. <br>
                            <strong> 10. Mobile Devices:</strong> Mobile devices such as smartphones or tablets can be useful
                            for video editors on the go. They can be used for quick video edits, reviewing footage,
                            and staying connected with clients or collaborators. <br>
                            &nbsp; These are some of the essential gadgets that a video editor may need to enhance their
                            workflow and produce high-quality videos. The specific gadgets you need may vary depending on
                            your editing style, budget, and preferences. It's important to invest in reliable and
                            high-quality gadgets that suit your needs and budget for the best video editing experience.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 3 -->
        <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">The benefits of mobile video editing</h4>
                    </div>
                    <div class="modal-body">
                        <p class="mobile-videdit-blog">&nbsp; Mobile video editing has become increasingly popular due to the advancement of smartphone technology and
                            the availability of powerful video editing apps. There are several positives of mobile video editing,
                            including: <br>
                            <strong>1. Portability:</strong> One of the biggest advantages of mobile video editing is that you can
                            edit videos on the go, wherever you are. You don't need to carry around heavy equipment or be tied to a
                            specific location like with traditional video editing setups. You can edit videos while traveling, during
                            breaks, or whenever you have some free time, making it highly convenient and flexible. <br>
                            <strong>2. Accessibility:</strong> Mobile video editing apps are usually affordable or even free, making
                            them accessible to a wide range of users. This allows budding content creators, social media enthusiasts,
                            and anyone with a smartphone to get started with video editing without investing in expensive equipment
                            or software. <br>
                            <strong>3. User-friendly interface:</strong> Mobile video editing apps are designed with intuitive and
                            user-friendly interfaces, making them easy to use even for those who may not have prior experience with
                            video editing. Most apps offer drag-and-drop functionality, basic editing tools, and pre-set filters or
                            effects, making it simple to create visually appealing videos with just a few taps. <br>
                            <strong>4. Quick and efficient editing:</strong> Mobile video editing allows for quick and efficient
                            editing, thanks to the processing power of modern smartphones. You can trim, crop, add text, apply filters,
                            and make other basic edits in real-time, without the need for rendering or long export times. This makes
                            mobile video editing ideal for creating and sharing content quickly, especially for social media platforms
                            where timely content is crucial. <br>
                            <strong>5. Creativity on the go:</strong> Mobile video editing empowers users to express their creativity
                            wherever they are. With a smartphone, you can shoot, edit, and share videos in real-time, allowing for
                            spontaneous and creative storytelling. You can capture and edit moments as they happen, adding a unique
                            touch to your videos with ease. <br>
                            <strong>6. Social media integration:</strong> Many mobile video editing apps come with built-in social
                            media integration, allowing you to easily share your edited videos directly to various social media
                            platforms, such as Instagram, Facebook, TikTok, and YouTube. This streamlines the content creation process,
                            enabling you to quickly share your videos with your audience. <br>
                            &nbsp; In conclusion, mobile video editing offers several advantages, including portability, accessibility,
                            user-friendly interfaces, quick editing, creativity on the go, and social media integration. It has
                            become a popular option for content creators, social media enthusiasts, and anyone who wants to create and
                            share videos easily and conveniently using their smartphones.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


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

<?php
} else {
    header("location:login.php");
}
?>