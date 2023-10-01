<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #FFFFFF;
            color: #fff;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
        }

        #sidebar_menu {
            list-style-type: none;
            padding: 0;
        }

        #sidebar_menu li {
            padding: 10px;
        }

        #sidebar_menu li a {
            color: #fff;
            text-decoration: none;
        }

        .main_content {
            padding: 20px;
            z-index: 1;
        }
    </style>
</head>
<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-center">
            <a href="#"><img src="<?=base_url()?>admin/img/logo1.svg" alt="" width="300" height="70"></a>
        </div>

        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>

        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#homeSubMenu">
                    <img src="<?=base_url()?>admin/img/menu-icon/dashboard.svg" alt>
                    <span>Home</span>
                </a>
                <ul class="submenu" id="homeSubMenu">
                    <li class="active">
                        <a href="/admins"><img src="<?=base_url()?>admin/img/menu-icon/logo1.svg" alt=""
                                style="width: 17px; height: 17px;">Anisette </a>
                    </li>
                </ul>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#tableSubMenu">
                    <img src="<?=base_url()?>admin/img/menu-icon/8.svg" alt>
                    <span>Table</span>
                </a>
                <ul class="submenu" id="tableSubMenu">
                    <li><a href="/data_table">Data Tables</a></li>
                </ul>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#SettingSubMenu">
                    <img src="<?=base_url()?>admin/img/menu-icon/dashboard.svg" alt>
                    <span>Settings</span>
                </a>
                <ul class="submenu" id="SettingSubMenu">
                    <li><a href="/logout">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>
