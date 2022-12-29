<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alat - Create an Account</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section register">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar d-flex justify-content-between navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <div class="d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    Already have account
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <a href="login.php" class="cmn-btn">Login Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Register In start -->
    <section class="sign-in-up register">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Let’s Get Started!</h2>
                                <p>Please Enter your Personal Details to Start your Online Application</p>
                            </div>
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="row">
                                    <div class="col-12">
                                            <?php
                                            if(count($errors) == 1){
                                                ?>
                                                <div class="alert alert-danger text-center">
                                                    <?php
                                                    foreach($errors as $showerror){
                                                        echo $showerror;
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            }elseif(count($errors) > 1){
                                                ?>
                                                <div class="alert alert-danger">
                                                    <?php
                                                    foreach($errors as $showerror){
                                                        ?>
                                                        <li><?php echo $showerror; ?></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <select class="form-control" name="title">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Sir">Sir</option>
                                                <option value="Dr">Dr</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="single-input">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="fname" placeholder="John" required>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="single-input">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="lname" placeholder="Fisher" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                    
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="phone">Enter Your Phone Number</label>
                                            <input type="tel" name="phone" placeholder="Your Phone number here" requireds>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Account Type</label>
                                            <input type="text" name="acc_type" placeholder="Savings or Current" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email Address</label>
                                            <input type="email" name="email" placeholder="Your email address here" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="confirmPass">Enter Your Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" name="password" autocomplete="off" placeholder="Enter Your Password" required>
                                                <img class="showPass" src="assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="confirmPass">Confirm Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" name="cpass" autocomplete="off" placeholder="Confirm Your Password" required>
                                                <img class="showPass" src="assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <p>By clicking submit, you agree to <span>Bankio's Terms of Use, Privacy Policy, E-sign</span> & <span>communication Authorization.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button type="submit" name="submit" class="cmn-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register In end -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>