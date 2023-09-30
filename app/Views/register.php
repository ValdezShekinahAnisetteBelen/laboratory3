<?= $this->include('admin/include/top4') ?>

<body class="home-1">
    <!-- top notificationbar start -->
    <section class="top1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="top-home">
                        <li class="top-home-li">
                            <!-- currency start -->
                            <div class="currency">
                                <span class="currency-head">currency:</span>
                                <div class="currency-drop">
                                    <div class="eur">
                                        <img class="img-fluid" src="<?= base_url() ?>image/c-icon1.png" alt="">
                                        <span class="cur-name">EUR</span>
                                    </div>
                                    <ul class="all-currency">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon4.png" alt="">
                                                <span class="cur-name">AFN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon2.png" alt="">
                                                <span class="cur-name">BDT</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon3.png" alt="">
                                                <span class="cur-name">CAD</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon1.png" alt="">
                                                <span class="cur-name">EUR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon5.png" alt="">
                                                <span class="cur-name">GBP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon6.png" alt="">
                                                <span class="cur-name">INR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon7.png" alt="">
                                                <span class="cur-name">SAR</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-fluid" src="<?= base_url() ?>image/c-icon8.png" alt="">
                                                <span class="cur-name">USD</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- currency end -->
                        </li>
                        <li class="top-home-li t-content">
                            <!-- offer text start -->
                            <div class="top-content">
                                <p class="top-slogn"><span class="top-c">Free shipping</span> orders from all item</p>
                            </div>
                            <!-- offer text end -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- top notificationbar end -->

    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="about-p"><span>Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>
                            
                            <div class="container mt-5">
                                <div class="row justify-content-md-center">
                                    <div class="col-5">
                                        <h2>Create Account</h2>
                                        <!-- Display validation errors if any -->
                                <?php if (isset($validation)): ?>
                                    <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($validation->getErrors() as $error): ?>
                                        <li>
                                            <?= esc($error) ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    </div>
                                <?php endif; ?>
                                <form action="<?= base_url() ?>registration" method="post">
                                 <div class="input-box">
                                    <div class="single-input-fields">
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="Enter full name" value="<?= old('name') ?>"
                                        class="form-control" required>
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Email Address</label>
                                        <input type="email" name="email" placeholder="Enter email address" value="<?= old('email') ?>"
                                        class="form-control" required>
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control"
                                        required>
                                    </div>
                                    </div>
                                    <div class="register-footer">

                                    <button type="submit" class="submit-btn3">Sign Up</button>
                                    </div>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="register-account">
                            <h4>Already an account holder?</h4>
                           <a href="<?= base_url() ?>login"> Login</a>
                            <div class="register-info">
                                <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                                <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
    <!-- footer start -->
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
                                        <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                        <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
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
                                    <li class="f-link-ul-li"><a href="grid-list.html">Fruits</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Fast foods</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Vegetable</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Salads</a></li>
                                    <li class="f-link-ul-li"><a href="grid-list.html">Bestseller</a></li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">Services</h2>
                                <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                    <span>Services</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="about-us.html">About vegist</a></li>
                                    <li class="f-link-ul-li"><a href="faq%27s.html">Faq's</a></li>
                                    <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                    <li class="f-link-ul-li"><a href="blog-style-1-3-grid.html">News</a></li>
                                    <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">Privacy & terms</h2>
                                <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                    <span>Privacy & terms</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                    <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                    <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                    <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                    <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a></li>
                                </ul>
                            </div>
                            <div class="f-link">
                                <h2 class="h-footer">My account</h2>
                                <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                    <span>My account</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                    <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                    <li class="f-link-ul-li"><a href="cart.html">My cart</a></li>
                                    <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                    <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                    <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <!-- footer copyright start -->
    <section class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="f-bottom">
                        <li class="f-c f-copyright">
                            <p>Copyright <i class="fa fa-copyright"></i> 2023 spacingtech</p>
                        </li>
                        <li class="f-c f-social">
                            <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a>
                            <a href="https://www.facebook.com/" class="f-icn-link"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" class="f-icn-link"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/" class="f-icn-link"><i class="fa fa-pinterest-p"></i></a>
                            <a href="https://www.youtube.com/" class="f-icn-link"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="f-c f-payment">
                            <a href="checkout-1.html"><img src="<?= base_url() ?>image/payment.png" class="img-fluid" alt="payment image"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- footer copyright end -->
    <!-- back to top start -->
    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>
    <!-- jquery -->
</body>

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:13:47 GMT -->
</html>
