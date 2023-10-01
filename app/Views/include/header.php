<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Change color of links to black */
        a {
            color: black !important;
        }
        
        /* Change color of the search icon to white */
        .search-btn i.fa-search {
            color: white;
        }
    </style>
</head>
<body>
<section class="top1">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li">
                        <!-- mobile search start -->
                        <div class="r-search">
                            <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
                            <div class="modal fade" id="r-search-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="m-drop-search">
                                                <input type="text" name="search" placeholder="Search products, brands or advice">
                                                <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile search end -->
                    </li>
                    <li class="top-home-li t-content">
                        <!-- offer text start -->
                        <div class="top-content">
                            <p class="top-slogn"><span class="top-c">Free shipping</span> orders from all items</p>
                        </div>
                        <!-- offer text end -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- top notificationbar end -->

<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="index1.html">
                                <img src="image/logo1.svg" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search start -->
                        <div class="header-element search-wrap">
                            <input type="text" name="search" placeholder="Search product.">
                            <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>
                        </div>
                        <!-- search end -->
                        <!-- header-icon start -->
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk">
                                        <div class="user-icon">
                                            <a href="account.html" class="user-icon-desk">
                                                <span><i class="icon-user"></i></span>
                                            </a>
                                        </div>
                                        <div class="user-info">
                                            <span class="acc-title">Hi User!</span>
                                            <div class="account-login">
                                                <a href="/logout">Log In/Out</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-mob">
                                        <a href="account.html" class="user-icon">
                                            <span><i class="icon-user"></i></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- header-icon end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div>
                            <!-- menu start -->
                            <div class="navbar-collapse" id="navbarContent">
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">
                                            <!-- HOME -->
                                            <li class="menu-link parent">
                                                <a href="/anisette" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                </a>
                                            </li>
                                            <!-- SHOP -->
                                            <li class="menu-link parent">
                                                <a href="#" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="#" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>
