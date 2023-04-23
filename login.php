<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VideoFlex - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function() {

            $("#login").click(function() {

                email = $("#email").val();
                password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "pcheck.php",
                    data: "email=" + email + "&password=" + password,
                    success: function(html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

                            window.location.href = "blog.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
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

    <div class="brand">VideoFlex</div>
    <div class="address-bar">The Change Starts With You</div>

    <!-- Navigation -->
    <?php require_once 'navigation.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                        <strong>You must be logged in to view the blog.</strong>
                    </div>
                    <hr>
                    <h2 class="intro-text text-center"><strong>Login</strong>
                    </h2>
                    <div id="add_err2"></div>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlegth="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlegth="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group col-lg-12">
                        <a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
                    </div>
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
    <script src="js/bootstrap.js"></script>

</body>

</html>