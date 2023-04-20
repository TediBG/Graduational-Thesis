<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Videoflex</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#contact").click(function() {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');

                        } else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');

                        } else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');

                        } else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function() {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
</head>

<body>

    <div class="brand">Videoflex</div>
    <div class="address-bar">The Change Starts With You</div>

    <!-- Navigation -->
    <?php require_once 'navigation.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>Videoflex</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.869680981059!2d25.689056312409843!3d43.12826377101146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9291670c18139%3A0xd7fb505e51baabeb!2sM.%20V.%20Lomonosov%20School%20of%20Electrotechnics%20and%20Electronics!5e0!3m2!1sbg!2sbg!4v1682018060552!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone: <strong>0876543201</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:teodorpopov2004@abv.bg">teodorpopov2004@abv.bg</a></strong>
                    </p>
                    <p>Address: <strong>The <br> VHSEE "M. V. Lomonosov"<br>31 Nikola Petrov St., 5100 Center, Gorna Oryahovitsa</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>form</strong>
                    </h2>
                    <hr>
                    <p>This contact form is just the form elements, it is not a working form. You will have to make the form work by yourself, or take it out if you can't figure out how to make it work.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Videoflex 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>

</html>