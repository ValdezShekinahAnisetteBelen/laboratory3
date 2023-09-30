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
            overflow-x: hidden;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
            position: fixed;
            height: 100%;
            width: 250px;
            text-align: left;
            top: 0;
            left: 0;
            overflow-y: auto;
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
            margin-left: 250px;
            padding: 10px;
            z-index: 1;
        }

        .modal-backdrop {
            background-color: transparent !important;
            backdrop-filter: none;
        }

        .modal-content {
            z-index: 1051 !important;
            position: relative;
        }
    </style>
</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 main_content">
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

<?php foreach ($products as $product1): ?>
    <div class="modal fade" id="productModal<?= $product1['id'] ?>" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    $(document).ready(function () {
        $('.w-c-q-icn').click(function () {
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: '<?= base_url('product1/getProductInfo') ?>',
                data: {id: productId},
                success: function (response) {
                    var productInfo = JSON.parse(response);
                    updateModalContent(productInfo);
                }
            });
        });
    });

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
