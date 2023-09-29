<!-- Your Products Tab and Product Loop -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                                                    <a href="product.html">
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
                                                <h3><a href="product.html"><?= $product['name'] ?></a></h3>
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
                <!-- Modal content will be dynamically populated here -->
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
                    $('#productModal' + productId + ' .modal-content').html(response);
                    $('#productModal' + productId).modal('show'); // Show the modal
                }
            });
        });
    });
</script>
