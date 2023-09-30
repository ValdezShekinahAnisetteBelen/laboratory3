
<?= $this->include('admin/include/top2') ?>
<?= $this->include('admin/include/header1') ?>

<!-- Add the DataTables CSS and JavaScript -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3> Data Table</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-end">
                                    <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i> Data
                                        Table</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Table</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                        class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
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
        </tr>
    </thead>
    <tbody>
        <!-- Loop through the products and populate the table rows -->
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><img src="<?= $product['image'] ?>" alt="Product Image" width="100"></td>
                <td><?= '$' . number_format($product['price'], 2) ?></td>
                <td><?= $product['category'] ?></td>
                <td><?= $product['quantity'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Initialize the DataTable -->
<script>
    $(document).ready(function () {
        $('#product-table').DataTable();
    });
</script>
