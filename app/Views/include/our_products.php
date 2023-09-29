<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="our-products-tab section-tb-padding">
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
                            <div class="home-pro-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <?php foreach ($products as $product): ?>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#" data-toggle="modal" data-target="#productModal<?= $product['id'] ?>">
                                                            <img src="<?= $product['image'] ?>" alt="pro-img1" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="#" class="w-c-q-icn" data-toggle="modal" data-target="#productModal<?= $product['id'] ?>"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="#" data-toggle="modal" data-target="#productModal<?= $product['id'] ?>"><?= $product['name'] ?></a></h3>
                                                    <p style="font-size: smaller;"><?= $product['description'] ?></p>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$<?= number_format($product['price'], 2) ?> USD</span>
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
        </div>
    </section>

    <!-- Modals -->
    <?php foreach ($products as $product): ?>
        <div class="modal fade" id="productModal<?= $product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
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
                                <img src="<?= $product['image'] ?>" alt="Product Image" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h4><?= $product['name'] ?></h4>
                                <p><?= $product['description'] ?></p>
                                <p><strong>Price:</strong> $<?= number_format($product['price'], 2) ?> USD</p>
                                <p><strong>Category:</strong> <?= $product['category'] ?></p>
                                <p><strong>Quantity:</strong> <?= $product['quantity'] ?></p>
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
                    url: '<?= base_url('product/getProductInfo') ?>',
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
