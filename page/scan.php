<?php
require_once "config.php";
include('../libs/phpqrcode/qrlib.php');
?>
<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Check Out Coupong</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/scanner.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <h3 class="mb-0">Check Out Coupong</h3>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl  container-p-y center">
                        <div class="row pb-3">
                            <div class="col-lg-12 mb-12 order-0">
                                <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                                <div class="row " >
                                    <div class="col-sm-12">
                                        <video id="preview" class="p-1 border" style="width:100%;"></video>
                                    </div>
                                    <script type="text/javascript">
                                        var scanner = new Instascan.Scanner({
                                            video: document.getElementById('preview'),
                                            scanPeriod: 5,
                                            mirror: false
                                        });
                                        scanner.addListener('scan', function(content) {
                                            //alert(content);
                                            window.location.href=content;
                                        });
                                        Instascan.Camera.getCameras().then(function(cameras) {
                                            if (cameras.length > 0) {
                                                scanner.start(cameras[0]);
                                                $('[name="options"]').on('change', function() {
                                                    if ($(this).val() == 1) {
                                                        if (cameras[0] != "") {
                                                            scanner.start(cameras[0]);
                                                        } else {
                                                            alert('No Front camera found!');
                                                        }
                                                    } else if ($(this).val() == 2) {
                                                        if (cameras[1] != "") {
                                                            scanner.start(cameras[1]);
                                                        } else {
                                                            alert('No Back camera found!');
                                                        }
                                                    }
                                                });
                                            } else {
                                                console.error('No cameras found.');
                                                alert('No cameras found.');
                                            }
                                        }).catch(function(e) {
                                            console.error(e);
                                            alert(e);
                                        });
                                    </script>
                                </div>
                                <div class="row ">
                                    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>
        
</body>
<!-- Display the countdown timer in an element -->



</html>