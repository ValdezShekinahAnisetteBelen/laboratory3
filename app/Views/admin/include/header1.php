<style>
     /* Set a fixed width for the sidebar */
.sidebar {
    background-color: #FFFFFF;
    color: #000;
    width: 250px;
    position: fixed;
    height: 100%;
    overflow-y: auto; /* Allow vertical scrolling */
    padding-top: 70px;
}

/* Style for the header inside the sidebar */
.sidebar-header {
    padding: 20px;
    text-align: center;
}

/* Style for the sidebar menu items */
#sidebar_menu {
    list-style-type: none;
    padding: 0;
}

#sidebar_menu li {
    padding: 10px;
}

/* Style for the sidebar menu links */
#sidebar_menu li a {
    color: #000;
    text-decoration: none;
    text-align: left; /* Adjust text alignment to the left */
    display: block; /* Ensure each link takes full width */
    padding: 10px 20px; /* Add padding to the links */
}

/* Adjust the padding for the "Home," "Shop," and "Collection" links */
#sidebar_menu .sp-link-title {
    padding-left: 20px; /* Reduce padding to prevent horizontal overflow */
}

.link-title {
    padding-left: 20px; /* Reduce padding to prevent horizontal overflow */
}
    </style>
</head>
<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-center">
            <a href="/admins"><img src="admin/img/logo1.svg" alt="" width="300" height="70"></a>
        </div>

        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
      <!-- Sidebar Menu -->
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="admin/img/menu-icon/dashboard.svg" alt>
                    <span>Home</span>
                </a>
                <ul>
                    <li>
                        <a class="active" href="/admins"><img src="admin/img/menu-icon/logo1.svg" alt=""
                                style="width: 17px; height: 17px;">Anisette </a>
                    </li>
                </ul>
            </li>
           
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="admin/img/menu-icon/8.svg" alt>
                    <span>Table</span>
                </a>
                <ul>
                    <li><a href="data_table.html">Data Tables</a></li>
                    <li><a href="bootstrap_table.html">Grid Tables</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="admin/img/menu-icon/9.svg" alt>
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">Chart sparkline</a></li>
                    <li><a href="am_chart.html">am-charts</a></li>
                    <li><a href="nvd3_charts.html">nvd3 charts.</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="admin/img/menu-icon/10.svg" alt>
                    <span>Widgets</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="admin/img/menu-icon/map.svg" alt>
                    <span>Maps</span>
                </a>
                <ul>
                    <li><a href="mapjs.html">Maps JS</a></li>
                    <li><a href="vector_map.html">Vector Maps</a></li>
                </ul>
            </li>
        </ul>
    </nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

  <!-- top notificationbar start -->
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
                                                    <span class="acc-title">Account</span>
                                                    <div class="account-login">
                                                        <a href="register.html">Register</a>
                                                        <a href="login.html">Log in</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="acc-mob">
                                                <a href="account.html" class="user-icon">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                       
                            
                                                                </header>