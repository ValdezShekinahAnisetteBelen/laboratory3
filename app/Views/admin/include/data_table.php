<?= $this->include('admin/include/top2') ?>
<?= $this->include('admin/include/header1') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anisette Pure Living</title>

</head>
<style>
    /* Custom styles */
    .btn-success.text-white {
        color: white;
        background-color: green;
    }

    .btn-danger.text-white {
        color: white;
        background-color: orange;
    }
    tr {
    border-bottom: 1px solid #000; /* Existing style for the bottom border */
}

/* Add the following style for the colored bottom border */
tr.colored-border {
    border-bottom-color: your-color; /* Replace 'your-color' with the desired color value */
    border-bottom-width: 2px; /* You can adjust the width as needed */
}
.dataTables_filter {
    display: block;
    margin-bottom: 10px; /* Adjust as needed */
}

.dataTables_filter label {
    font-weight: bold; /* Optional: Make the search label bold */
}

.dataTables_filter input {
    width: 100%; /* Optional: Make the search input field take up the full width */
}

</style>
<body>
    <section class="main_content dashboard_part">
        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <h3>Data Table</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dashboard_breadcam text-end">
                                        <p><a href="/admins">Home</a> <i class="fas fa-caret-right"></i> Data Table</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4></h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="">
                                        <div class="">
                                            <div class="">
                                                <input type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#memod" class="btn_1">+ Create or Add New Products</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Form Modal -->
                            <div class="modal fade" id="memod" tabindex="-1" aria-labelledby="memodLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"></div>
                                        <div class="modal-body">
                                            
                                            <form action="/save" method="post" class="form-border" enctype="multipart/form-data">
                                                <h2>Product Form</h2>
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="name" value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="description" value="<?= isset($pro['description']) ? $pro['description'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                                <div class="form-group">
                                                    <label>price</label>
                                                    <input type="number" step="0.01" class="form-control" name="price" placeholder="price" value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>category</label>
                                                    <input type="text" class="form-control" name="category" placeholder="category" value="<?= isset($pro['category']) ? $pro['category'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>quantity</label>
                                                    <input type="number" step="0.01" class="form-control" name="quantity" placeholder="quantity" value="<?= isset($pro['quantity']) ? $pro['quantity'] : '' ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" value="Save Product">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

        <!-- DataTable -->
        <div class="QA_table mb_30">
            <table id="product-table" class="table lms_table_active">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td data-search="<?= $product['image'] ?>" style="max-width: 100px;">
                        <a href="<?= strpos($product['image'], 'http') === 0 ? $product['image'] : base_url($product['image']) ?>" target="_blank">
                            <img src="<?= strpos($product['image'], 'http') === 0 ? $product['image'] : base_url($product['image']) ?>" alt="Image" width="100">
                        </a>
                        <td><?= '$' . number_format($product['price'], 2) ?></td>
                        <td><?= $product['category'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td>
                            <button class="btn btn-success edit-product text-white" data-toggle="modal" data-target="#editModal" data-product-id="<?= $product['id'] ?>">Edit</button>
                            <a class="btn btn-danger text-white" href="/delete/<?= esc($product['id']) ?>">Delete</a>
                        </td>
                    </tr>
                  
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

                                <!-- Edit Product Modal -->
                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/editProduct" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" id="editProductId">
                                                    <div class="form-group">
                                                        <label for="editName">Name</label>
                                                        <input type="text" class="form-control" id="editName" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editDescription">Description</label>
                                                        <input type="text" class="form-control" id="editDescription" name="description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editImage">Image</label>
                                                        <input type="file" class="form-control" id="editImage" name="image">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="currentImage">Current Image</label>
                                                        <img id="currentImage" src="" alt="Current Image" width="100">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPrice">Price</label>
                                                        <input type="number" step="0.01" class="form-control" id="editPrice" name="price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editCategory">Category</label>
                                                        <input type="text" class="form-control" id="editCategory" name="category">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editQuantity">Quantity</label>
                                                        <input type="number" step="1" class="form-control" id="editQuantity" name="quantity">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Edit Product Modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
   
    

    <script>
    $(document).ready(function () {
        // Initialize DataTable with pagination
        $('#product-table').DataTable({
            "paging": true,  // Enable pagination
            "lengthChange": false, // Disable the option to change the number of records displayed per page
        });

        // Rest of your JavaScript code
        $('.edit-product').click(function () {
            var productId = $(this).data('product-id');
            $.ajax({
                url: '/getProductInfo',
                method: 'post',
                data: { id: productId },
                dataType: 'json',
                success: function (data) {
                    if (data) {
                        $('#editProductId').val(data.id);
                        $('#editName').val(data.name);
                        $('#editDescription').val(data.description);
                        $('#currentImage').attr('src', data.image);
                        $('#editPrice').val(data.price);
                        $('#editCategory').val(data.category);
                        $('#editQuantity').val(data.quantity);
                    }
                }
            });
        });
    });
</script>
</body>
</html>
