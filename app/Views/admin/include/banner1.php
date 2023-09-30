<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary CSS and JavaScript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Add a background color to the body */
        body {
            background-color: #f8f9fa; /* Change the background color as desired */
        }

        /* Set a fixed width for the sidebar */
        .sidebar {
            background-color: #343a40; /* Background color for the sidebar */
            color: #fff; /* Text color for the sidebar */
            height: 100vh; /* Make sidebar full height */
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
            color: #fff;
            text-decoration: none;
        }

        /* Style for the banner container */
        .banner-container {
            height: 100vh; /* Adjust the height as needed */
            overflow: hidden; /* Hide any overflow content */
            padding: 0;
        }

        /* Style for the banner image */
        .banner-img {
            width: 100%;
            height: 100%;
            object-fit:cover; /* Ensure the image covers the entire container */
        }

        /* Style for the banner text */
        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        /* Style for the banner headings */
        .banner-text h1, .banner-text span {
            margin: 0;
            font-size: 24px;
        }

        /* Style for the banner button */
        .btn-style1 {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>

</head>


            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 main_content">
                <!-- Banner section -->
                <section class="banner-container">
                    <img class="banner-img" src="image/slider3.svg" alt="Banner Image">
                    <div class="banner-text">
                        <span>Top selling!</span>
                        <h1>Fresh for your health</h1>
                        <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                    </div>
    </main>
        </section>
        <!-- Home page slider end -->

        <!-- Add your additional content here -->
        <!-- Example:
        <div class="container">
            <h2>Your Content Goes Here</h2>
            <p>This is a sample content section.</p>
        </div>
        -->
    </main>
</body>
</html>
