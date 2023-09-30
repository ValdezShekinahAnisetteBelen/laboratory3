<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary CSS and JavaScript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            border-radius: 10px; /* Make the shape oblong */
        }

        /* Change background color and shape when hovering */
        #sidebar_menu li:hover > a {
            background-color: orange;
            color: white;
            border-radius: 8px; /* Adjust the border-radius to make it oblong */
        }

        /* Initially hide submenu items */
        .submenu {
            display: none;
        }

        /* Expand submenu when clicking */
        .active .submenu {
            display: block;
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

        <!-- Sidebar Menu -->
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
            <!-- Add more menu items here -->
        </ul>
    </nav>

    <script>
        $(document).ready(function () {
            // Toggle submenu visibility when clicking on a menu item
            $('#sidebar_menu .has-arrow').click(function () {
                $(this).parent().toggleClass('active');
            });
        });
    </script>
</body>
</html>
