<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .sidebar {
            background-color: #FFFFFF;
            color: #000;
            width: 250px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            padding-top: 70px;
        }

        #sidebar_menu {
            list-style-type: none;
            padding: 0;
        }

        #sidebar_menu li {
            padding: 10px;
        }

        #sidebar_menu li a {
            color: #000;
            text-decoration: none;
            text-align: left;
            display: block;
            padding: 10px 20px;
            border-radius: 10px;
        }

        #sidebar_menu li:hover > a {
            background-color: orange;
            color: white;
            border-radius: 8px;
        }

        .submenu {
            display: none;
        }

        .active .submenu {
            display: block;
        }
        #sidebar_menu li.mm-active a.has-arrow {
            background-color: greenyellow;
        }
    </style>
</head>
<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-center">
            <a href="#"><img src="admin/img/logo1.svg" alt="" width="300" height="70"></a>
        </div>

        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>

        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#homeSubMenu">
                    <img src="admin/img/menu-icon/dashboard.svg" alt>
                    <span>Home</span>
                </a>
                <ul class="submenu" id="homeSubMenu">
                    <li class="active">
                        <a href="/admins"><img src="admin/img/menu-icon/logo1.svg" alt=""
                                style="width: 17px; height: 17px;">Anisette </a>
                    </li>
                </ul>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#tableSubMenu">
                    <img src="admin/img/menu-icon/8.svg" alt>
                    <span>Table</span>
                </a>
                <ul class="submenu" id="tableSubMenu">
                    <li><a href="/data_table">Data Tables</a></li>
                </ul>
            </li>

            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false" data-toggle="collapse" data-target="#SettingSubMenu">
                    <img src="admin/img/menu-icon/dashboard.svg" alt>
                    <span>Settings</span>
                </a>
                <ul class="submenu" id="SettingSubMenu">
                    <li><a href="/logout">Log In/Out</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <script>
        $(document).ready(function () {
            $('#sidebar_menu .has-arrow').click(function () {
                $(this).parent().toggleClass('active');
            });
        });
    </script>
</body>
</html>
