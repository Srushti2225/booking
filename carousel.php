<?php
require('Includes/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
    <?php require('Includes/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('Includes/header.php'); ?>

    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-3">CAROUSEL</h3>
                <!-- Carousel section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Images</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn custom-bg shadow-none btn-sm text-white"
                                data-bs-toggle="modal" data-bs-target="#carousel-settings">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                        <div class="row" id="carousel-data">
                            <div class="col-md-2 mb-3">
                                <div class="card bg-dark text-white">
                                    <img src="../images/carousel/img7.jpg" class="card-img">
                                    <div class="card-img-overlay text-end">
                                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Modal -->
    <div class="modal fade" id="carousel-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="carousel_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Image</h5>
                    </div>
                    <div class="modal-body">
                        <div class=" mb-3">
                            <label class="form-label fw-bold">Picture</label>
                            <input type="file" name="picture" id="picture_inp" accept=".jpg, .png, .webp, .jpeg"
                                class="form-control shadow-none" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="picture.value=''" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <?php require('Includes/scripts.php'); ?>
    <script src="scripts/carousel.js"></script>
</body>

</html>