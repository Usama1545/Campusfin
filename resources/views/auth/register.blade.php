<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="login_auth/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="login_auth/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="Phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="phone" name="Phone" id="Phone" placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signup" id="signup" class="btn btn-primary" value="Register"/>
                            </div>
                            <div class="form-group">
                            <a href="" class="btn btn-primary" style="background-color:#F8F8F8; color:black ">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="login_auth/images/signup-image.jpg" alt="sing up image"></figure>
                        <!-- <a href="#" class="signup-image-link">I am already member</a>
                        <br> -->
                        <span><h4>Rights</h4></span>
                        <a href="" class="btn btn-primary" style="">Guide</a>
                        <a href="" class="btn btn-primary">Blog</a>
                        <a href="" class="btn btn-primary">Project</a>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="login_auth/vendor/jquery/jquery.min.js"></script>
    <script src="login_auth/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
