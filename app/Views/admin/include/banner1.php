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
            background-color: #343a40;
            color: #fff;
            height: 100vh;
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

        .banner-container {
            height: 100vh;
            overflow: hidden;
            padding: 0;
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #000;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 50px;
        }

        .btn-style1 {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <main role="main" class="col-md-11 ml-sm-auto col-lg-10 px-md-7 main_content">
        <section class="banner-container">
            <img class="banner-img" src="image/slider3.svg" alt="Banner Image">
            <div class="banner-text">
                <span>Top selling!</span>
                <h1>Fresh for your health</h1>
                <a href="#" class="btn btn-style1">Shop now</a>
            </div>
        </section>
    </main>
</body>
</html>
