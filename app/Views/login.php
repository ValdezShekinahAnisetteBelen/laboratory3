<?= $this->include('include/top3') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/custom.css">
    <style>
        /* Add these styles to your CSS file */
        .orange-btn {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .orange-btn:hover {
            background-color: darkorange;
        }
        .anisette-button {
        background-color: orange;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .anisette-button a {
        text-decoration: none;
        color: white;
    }

    .anisette-button:hover {
        background-color: greenyellow;
    }
    </style>
</head>
<body class="home-1">
    <section class="top1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="top-home">
                        <li class="top-home-li">
                            <div class="currency">
                                <span class="currency-head">Currency:</span>
                                <div class="currency-drop">
                                    <div class="eur">
                                        <img class="img-fluid" src="<?= base_url() ?>image/c-icon1.png" alt="">
                                        <span class="cur-name">EUR</span>
                                    </div>
                                    <ul class="all-currency">
                                        <?php
                                        $currencies = [
                                            ['AFN', 'c-icon4.png'],
                                            ['BDT', 'c-icon2.png'],
                                            ['CAD', 'c-icon3.png'],
                                            ['EUR', 'c-icon1.png'],
                                            ['GBP', 'c-icon5.png'],
                                            ['INR', 'c-icon6.png'],
                                            ['SAR', 'c-icon7.png'],
                                            ['USD', 'c-icon8.png']
                                        ];

                                        foreach ($currencies as $currency) {
                                            echo '<li>';
                                            echo '<a href="javascript:void(0)">';
                                            echo '<img class="img-fluid" src="' . base_url() . 'image/' . $currency[1] . '" alt="' . $currency[0] . '">';
                                            echo '<span class="cur-name">' . $currency[0] . '</span>';
                                            echo '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="top-home-li t-content">
                            <div class="top-content">
                                <p class="top-slogn"><span class="top-c">Free shipping</span> orders from all items</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="header-bottom-area mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div>
                            <div class="img-hotline">
                                <div class="image-line">
                                    <a href="javascript:void(0)"><img src="<?= base_url() ?>image/icon_contact.png" class="img-fluid" alt="image-icon"></a>
                                </div>
                                <div class="image-content">
                                    <span class="hot-l">Hotline:</span>
                                    <span>0123 456 789</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url('<?= base_url() ?>image/about-image.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="about-p"><span>Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
            <div class="col">
                    <button class="anisette-button">
                        <a href="/anisette">
                            <i class="fa fa-shopping-cart"></i> Window Shopping at Anisette Pure Living
                        </a>
                    </button>
                </div>
                    <div class="login-area">
                        <div class="login-box">
                            <?php if (session()->getFlashdata('msg')): ?>
                                <div class="alert alert-warning">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?= base_url() ?>loginAuth" method="post">
                                <div class="input-box">
                                    <div class="single-input-fields">
                                        <label>Username or Email Address</label>
                                        <input type="text" name="usernameOrEmail" placeholder="Username / Email address" value="<?= set_value('email') ?>" class="form-control">
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                    </div>
                                    <div class="single-input-fields login-check">
                                        <button type="submit" class="submit-btn3 orange-btn">Login</button>
                                    </div>
                                    <label for="fruit1">Keep me logged in</label>
                                </div>
                            </form>
                        </div>
                        <div class="login-account">
                            <h4>Don't have an account?</h4>
                            <a href="/register" class="ceate-a">Create account</a>
                            <div class="login-info">
                                <a href="#" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data, read our <a href="#">privacy policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... (previous code) ... -->

<section class="footer-one section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-service section-b-padding">
                    <ul class="service-ul">
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                            <span>Free delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                            <span>Cash on delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                            <span>30 Days returns</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                            <span>Online support</span>
                        </li>
                    </ul>
                </div>
                <div class="f-logo">
                    <ul class="footer-ul">
                        <li class="footer-li footer-logo">
                            <a href="index1.html">
                                <img class="img-fluid" src="<?= base_url() ?>image/logo1.png" alt="">
                            </a>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-location"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Address</h6>
                                    <span>401 Broadway 24th floor</span>
                                    <span>Near ant mall cross road</span>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-contact">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-telephone"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Contact</h6>
                                    <span>Phone: 1-800-222-000</span>
                                    <span>Email: demo@demo.com</span>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-help"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Help</h6>
                                    <span>Lorem ipsum is simply</span>
                                    <span>Dummy the printing</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer-bottom section-t-padding">
                    <div class="footer-link" id="footer-accordian">
                        <div class="f-link">
                            <h2 class="h-footer">Top categories</h2>
                            <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                <span>Top categories</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="#">Fruits</a></li>
                                <li class="f-link-ul-li"><a href="#">Fast foods</a></li>
                                <li class="f-link-ul-li"><a href="#">Vegetable</a></li>
                                <li class="f-link-ul-li"><a href="#">Salads</a></li>
                                <li class="f-link-ul-li"><a href="#">Bestseller</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Services</h2>
                            <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                <span>Services</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="#">About vegist</a></li>
                                <li class="f-link-ul-li"><a href="#">Faq's</a></li>
                                <li class="f-link-ul-li"><a href="#">Contact us</a></li>
                                <li class="f-link-ul-li"><a href="#">News</a></li>
                                <li class="f-link-ul-li"><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Privacy & terms</h2>
                            <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                <span>Privacy & terms</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="#">Payment policy</a></li>
                                <li class="f-link-ul-li"><a href="#">Privacy policy</a></li>
                                <li class="f-link-ul-li"><a href="#">Return policy</a></li>
                                <li class="f-link-ul-li"><a href="#">Shipping policy</a></li>
                                <li class="f-link-ul-li"><a href="#">Terms & conditions</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">My account</h2>
                            <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                <span>My account</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="#">My account</a></li>
                                <li class="f-link-ul-li"><a href="#">My cart</a></li>
                                <li class="f-link-ul-li"><a href="#">Order history</a></li>
                                <li class="f-link-ul-li"><a href="#">My wishlist</a></li>
                                <li class="f-link-ul-li"><a href="#">My address</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... (remaining code) ... -->


    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>

    <div class="mm-fullscreen-bg"></div>
</body>

<script src="<?= base_url() ?>js/modernizr-2.8.3.min.js"></script>
<script src="<?= base_url() ?>js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/popper.min.js"></script>
<script src="<?= base_url() ?>js/fontawesome.min.js"></script>
<script src="<?= base_url() ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>js/swiper.min.js"></script>
<script src="<?= base_url() ?>js/custom.js"></script>
</html>
