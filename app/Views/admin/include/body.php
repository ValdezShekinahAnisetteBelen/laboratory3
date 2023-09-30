<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary CSS and JavaScript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
         /* Change color of navigation links */
         ul.nav-tabs li.nav-item a.nav-link,
        ul.nav-tabs li.nav-item a.nav-link.active,
        ul.nav-tabs li.nav-item a.nav-link:hover,
        h3 a,
        p a {
            color: orange !important; /* Change the color to orange */
        }
        /* Add a background color to the body */
        body {
            background-color: #f8f9fa; /* Change the background color as desired */
            overflow-x: hidden; /* Hide horizontal scrollbar for the entire page */
        }

        /* Set a fixed width for the sidebar */
        .sidebar {
            background-color: #343a40; /* Background color for the sidebar */
            color: #fff; /* Text color for the sidebar */
            position: fixed;
            height: 100%;
            width: 250px; /* Adjust the width as needed */
            text-align: left; /* Align text to the left */
            top: 0;
            left: 0;
            overflow-y: auto; /* Add vertical scrollbar when needed */
        }

        /* Style for the sidebar header */
        .sidebar-header {
            padding: 20px; /* Adjust padding as needed */
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

        /* Add left margin to the main content */
        .main_content {
            margin-left: 250px; /* Adjust the margin to match sidebar width */
            padding: 10px;
            z-index: 1; /* Bring the main content to the front */
        }

        /* Adjust modal backdrop z-index */
        .modal-backdrop {
    background-color: transparent !important;
    backdrop-filter: none; /* Remove backdrop blur if you don't want it */
}

        /* Style for the modal content */
        .modal-content {
            z-index: 1051 !important; /* Bring the modal content above the backdrop */
            position: relative;
        }

        /* Style for the close button */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>


            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 main_content">
    <!-- Your main content here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our products</h2>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">All PRODUCTS</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content pro-tab-slider">
                    <div class="tab-pane fade show active" id="home">
                        <div class="row">
                            <?php foreach ($products as $product1): ?>
                                <div class="col-md-3 mb-4">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <!-- Use proper data attributes for data-toggle and data-target -->
                                                <a href="#" data-toggle="modal"
                                                    data-target="#productModal<?= $product1['id'] ?>">
                                                    <img src="<?= $product1['image'] ?>" alt="pro-img1"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="#" class="w-c-q-icn" data-toggle="modal"
                                                    data-target="#productModal<?= $product1['id'] ?>"><i
                                                        class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="#" data-toggle="modal"
                                                    data-target="#productModal<?= $product1['id'] ?>"><?= $product1['name'] ?></a>
                                            </h3>
                                            <p style="font-size: smaller;"><?= $product1['description'] ?></p>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$<?= number_format($product1['price'], 2) ?> USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Modals -->
<?php foreach ($products as $product1): ?>
    <div class="modal fade" id="productModal<?= $product1['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= $product1['image'] ?>" alt="Product Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h4><?= $product1['name'] ?></h4>
                            <p><?= $product1['description'] ?></p>
                            <p><strong>Price:</strong> $<?= number_format($product1['price'], 2) ?> USD</p>
                            <p><strong>Category:</strong> <?= $product1['category'] ?></p>
                            <p><strong>Quantity:</strong> <?= $product1['quantity'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    // JavaScript to handle the "eye" icon click event
    $(document).ready(function () {
        $('.w-c-q-icn').click(function () {
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: '<?= base_url('product1/getProductInfo') ?>',
                data: { id: productId },
                success: function (response) {
                    // Parse the JSON response
                    var productInfo = JSON.parse(response);
                    updateModalContent(productInfo);
                }
            });
        });
    });

    // Function to update the modal content
    function updateModalContent(productInfo) {
        $('#product-name').text(productInfo.name);
        $('#product-description').text(productInfo.description);
        $('#product-image').attr('src', productInfo.image);
        $('#product-price').text('$' + productInfo.price + ' USD');
        $('#product-category').text(productInfo.category);
        $('#product-quantity').text(productInfo.quantity);
    }
</script>
</body>
</html>